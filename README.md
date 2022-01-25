# Dev Challenge

## Installazione
Installare le dipendenze attraverso `composer`.

Creare il database con il seguente comando: `php bin/console doctrine:database:create`.

Compilare il file .env configurando correttamente l'URL del Database ed eseguendo le 
migrazioni con il seguente comando: `php bin/console doctrine:migrations:migrate`.

Creare il database di test:

- `php bin/console --env=test doctrine:database:create`
- `php bin/console --env=test doctrine:schema:create`

Richiamare le fixtures attraverso il comando `php bin/console hautelook:fixtures:load`.

## Testing
All'interno della cartella `tests` si trovano 2 Test:

- ReportTest: Test che richiama la pagina `/report/1` e controlla il risultato;
- Service\CurrencyConverterTest: Test per il Service `CurrencyConverter`.