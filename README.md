# Woo start lara version 9.19  

> template use  
> - project init with tailwind, alpineJs, unpolyJs,  
    fortify for auth sample

## Use project

- install dependencies  
```bash
$ composer install
$ npm i
```  

- config your `.env`  
use `.env.example` for create your file
```bash
1. database  
2. mailer provider
```  

- migrate in database  
```bash
# migrate in database
$ php artisan migrate
# or update migrate  
$ php artisan migrate:refresh
```  

- execute this for create role of 'root' for your first user  
and create role 'auth' for other users 
```bash
$ php artisan tinker
>>> Role::factory()->count(1)->create();
>>> Role::factory()->create(['libelle' => 'auth']);
>>> exit
# check your database for see is good
```  

## Menu of doc
- [Components]()