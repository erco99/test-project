# Progetto di esempio Laravel + Vue
Questo progetto è un’applicazione Laravel di esempio pensata per apprendere e testare le logiche fondamentali del framework.
Si basa sullo starter kit ufficiale di Laravel e include funzionalità di base per autenticazione e gestione utente.

## Caratteristiche

**Login**: accesso con email e password.

**Registrazione**: creazione di un nuovo account.

**Dashboard**: area privata dove è possibile visualizzare e modificare i dati dell’utente registrato e incrementare il counter attraverso un bottone.

## Scopo del progetto

- Testare e comprendere le funzionalità di base di Laravel.

- Sperimentare con autenticazione, gestione utenti e dashboard.

- Servire come base per progetti di apprendimento o prototipazione rapida.

## Tecnologie

- Laravel 12
- PHP 8.x
- Vue
- SQLite
- Blade
- Shadcn

## Step di esecuzione
Eseguire i seguenti step da terminale per runnare l'applicazione:

### 1. Requisiti di installazione
Per eseguire l'applicazione occorre installare PHP, Composer e l'installer di Laravel. Eseguire il seguente comando per installare tutti i requisiti:
#### MacOS
``` 
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

#### Windows PowerShell
```
# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```
#### Linux
```
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

### 2. Clonazione repository
```
git clone https://github.com/erco99/test-project.git
cd test-project
```

### 3. Installazione dipendenze PHP
```
composer install
```

### 3. Creazione file `.env`
```
cp .env.example .env
```

### 4. Generazione chiavi
```
php artisan key:generate
```

### 5. Creazione database
```
touch database/database.sqlite
```

### 6. Esecuzione migrazioni
```
php artisan migrate
```

### 7. Installazione dipendenze Node e avvio del server locale
```
npm install && npm run build
composer run dev
```
