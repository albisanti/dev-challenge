<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\Entity\Transaction;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $customer = new Customer();
        $customer->setName('Utente1');
        $customer->setSurname('Test');
        $customer->setEmail('utente@test.com');

        $customer2 = new Customer();
        $customer2->setName('Utente2');
        $customer2->setSurname('Test');
        $customer2->setEmail('utente2@test.com');


        $manager->persist($customer);
        $manager->persist($customer2);

        $transaction = new Transaction();
        $transaction->setValue(50.00);
        $transaction->setCurrency('GPB');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-01'));
        $transaction->setCustomer($customer);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(66.10);
        $transaction->setCurrency('USD');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-01'));
        $transaction->setCustomer($customer2);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(12.00);
        $transaction->setCurrency('EUR');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-02'));
        $transaction->setCustomer($customer2);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(6.50);
        $transaction->setCurrency('GPB');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-02'));
        $transaction->setCustomer($customer2);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(11.04);
        $transaction->setCurrency('GPB');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-02'));
        $transaction->setCustomer($customer);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(1.00);
        $transaction->setCurrency('EUR');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-02'));
        $transaction->setCustomer($customer);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(23.05);
        $transaction->setCurrency('USD');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-03'));
        $transaction->setCustomer($customer);
        $manager->persist($transaction);
        $manager->flush();

        $transaction = new Transaction();
        $transaction->setValue(6.50);
        $transaction->setCurrency('EUR');
        $transaction->setCreatedAt(new DateTimeImmutable('2015-04-04'));
        $transaction->setCustomer($customer2);
        $manager->persist($transaction);
        $manager->flush();
    }
}
