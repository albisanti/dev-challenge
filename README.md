# Dev Challenge

## Installazione
Estrarre i file zippati in una cartella.

Installare le dipendenze attraverso `composer`.

Compilare il file .env configurando correttamente l'URL del Database ed eseguendo le migrazioni con il seguente comando: `php bin/console doctrine:migrations:migrate`

Richiamare le fixtures attraverso il comando `php bin/console hautelook:fixtures:load`

## Testing
All'interno della cartella `tests` si trovano 2 Test:

- ReportTest: Test che richiama la pagina `/report/1` e controlla il risultato;
- Service\CurrencyConverterTest: Test per il Service `CurrencyConverter`.