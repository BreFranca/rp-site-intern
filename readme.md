# Site RP v1.1
### with RPX
> Version 1.0.4

Prepare your .env file there with database connection and other settings.

## Getting Started

```
composer install
php artisan migrate --seed
php artisan key:generate
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
```

```
php artisan serve
```

### Login

Email: admin@admin.com
Password: password