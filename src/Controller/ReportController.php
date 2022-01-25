<?php

namespace App\Controller;

use App\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CurrencyConverter;
use Doctrine\Persistence\ManagerRegistry;

class ReportController extends AbstractController
{
    /**
     * Show all the transactions for a given customer_id
     *
     * @param ManagerRegistry $doctrine
     * @param CurrencyConverter $converter
     * @param int $customer_id
     * @return Response
     * @throws \Exception
     */
    #[Route('/report/{customer_id}', name: 'report')]
    public function ShowCustomerReport(ManagerRegistry $doctrine, CurrencyConverter $converter, int $customer_id): Response
    {
        $customer = $doctrine->getRepository(Customer::class)->find($customer_id);
        if(!$customer) return $this->json(['status' => 'error', 'report' => 'No customer found with the given ID']);
        $transactions = $customer->getTransactions();
        $report = [];
        foreach($transactions as $transaction){
            $report[] = [
                'data' => $transaction->getCreatedAt()->format('Y-m-d'),
                'value' => $converter->calculate($transaction->getValue(), $transaction->getCurrency(), 'EUR').' EUR'
            ];
        }
        if($report) return $this->json(['status' => 'success', 'transactions' => $report]);
        return $this->json(['status' => 'error', 'report' => 'No transactions has been found for the given customer ID']);
    }
}
