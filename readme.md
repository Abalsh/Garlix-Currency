INTRODUCTION
----------
XCHANGE is a currency website designed and developed by Garlix team.

Requirements
----------

1. Clone the project from Gitlab
2. composer install
3. Create a copy of your .env file (cp .env.example .env)
4. Generate an app encryption key (php artisan key:generate)
5. * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
6. Run the server (php artisan serve)

Dependencies
----------
composer require spatie/laravel-newsletter
composer require guzzlehttp/guzzle

php artisan clear-compiled
composer update