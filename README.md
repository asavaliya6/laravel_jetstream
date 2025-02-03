## Laravel 11 Auth Scaffolding using Livewire Jetstream

- Create laravel project: ```composer create-project laravel/laravel laravel_jetstream```
- Install Jetstream: ```composer require laravel/jetstream```
- Create Auth with Livewire: ```php artisan jetstream:install livewire --dark```

## Laravel 11 Jetstream Features

- all features are configurable in files: ```fortify.php``` and ```jetstream.php```

## Livewire CRUD using Jetstream & Tailwind CSS

<h3>Create Auth with Jetstream Livewire</h3>

- Install Jetstream:```composer require laravel/jetstream```
- Create Auth with Livewire:```php artisan jetstream:install livewire```
- run the migration:```php artisan migrate```
- Create Migration, Model, Component,Update Component File,Blade Files, Config Template Layout and Add Route:

```
php artisan make:migration create_posts_table
php artisan migrate
php artisan make:model Post
php artisan make:livewire posts
php artisan livewire:publish --config
```

## Livewire Jetstream With Team Support

- Install Team with livewire jetstream : 

```
php artisan jetstream:install livewire --teams
npm install
npm run build
php artisan migrate
```

- Change the database SQLite to mysql and Change :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_jetstream
DB_USERNAME=root
DB_PASSWORD=-----
```

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=google@gmail.com
MAIL_PASSWORD=-----
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=google@gmail.com
MAIL_FROM_NAME="Laravel_JetStream"
```
