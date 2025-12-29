# Bagisto Kurdish (Kurmanji) Language Package

This package provides Kurdish (Kurmanji) translations for Bagisto E-commerce platform (v2.x).

## Installation

### 1. Copy Language Files
Copy the `lang` folder from this package to the root directory of your Bagisto project.
This will add the Kurdish translations to `lang/ku` and override the default package translations using `lang/vendor`.

```bash
cp -r lang/ your-bagisto-project-root/
```

### 2. Add Locale to Database
Run the following SQL command in your database to register the Kurdish locale:

```sql
INSERT INTO locales (code, name, direction, created_at, updated_at) VALUES ('ku', 'Kurdî', 'ltr', NOW(), NOW());
```

You can also do this via the Admin Panel:
1. Go to **Settings -> Locales**.
2. Click **Add Locale**.
3. Code: `ku`
4. Name: `Kurdî`
5. Direction: `LTR`

### 3. Configuration
Open your `.env` file and set the locale:

```
APP_LOCALE=ku
```

### 4. Clear Cache
Clear the application cache to load the new translations:

```bash
php artisan optimize:clear
```

## Contributing
Feel free to contribute to this repository by submitting pull requests.

