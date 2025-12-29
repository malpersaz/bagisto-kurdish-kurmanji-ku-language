# Bagisto Kurdish (Kurmanji) Language Package

This package provides Kurdish (Kurmanji) translations for Bagisto E-commerce platform (v2.x).

## Installation

### 1. Install via Composer
You can install the package via composer:

```bash
composer require malpersaz/bagisto-kurdish-package
```

### 2. Publish Assets
Publish the language files to your project:

```bash
php artisan vendor:publish --tag=bagisto-kurdish-lang
```

### 3. Run Migrations
This package includes a migration to register the Kurdish ('ku') locale in the database. Run the migration:

```bash
php artisan migrate
```

### 4. Configuration
Open your `.env` file and set the locale:

```
APP_LOCALE=ku
```

### 5. Clear Cache
Clear the application cache to load the new translations:

```bash
php artisan optimize:clear
```

## Contributing
Feel free to contribute to this repository by submitting pull requests.
