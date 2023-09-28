# Sistem
project Sistem Manajemen Partai

## Sistem Manajemen Partai


### Installation
1. Clone the repository using the command "git clone [link]"
2. Create database in MySql
3. Configure the .env file accordingly
4. Run command 

```
$composer install
$php artisan migrate
$php artisan db:seed
$php artisan serve
$php artisan storage:link
```
## spesifik migrate
```
$ php artisan migrate:refresh --path=database/migrations/2014_10_12_000000_create_users_table.php
$ php artisan migrate --path=database/migrations/specific && php artisan db:seed --class=SpecificSeeder
```

### Mendapat Update kodingan terbaru
```
$ git fetch origin master
$ git pull origin master
```

## Progres 28/9/2023
* setting all admin


* demo
