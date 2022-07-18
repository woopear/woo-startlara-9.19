# Woo start lara version 9.19  

> template use  
> - project init with   
    - laravel 9.19  
    - tailwind 3.1.6  
    - alpineJs 3.10.2  
    - unpolyJs 2.6.1  
    - fortify for auth sample 1.13  
    - livewire 2.10  

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

## structure  

- `ressources/views/private`  
folder containing all the backoffice part  
access only if logged in  

- `ressources/views/layouts`  
folder contains public layouts (app.blade.php)
and the private layout (private.blade.php)  

- `ressources/views/partials`  
this folder contains the header and footer of both parts
public and private  

- `ressources/views/auth`  
folder for all views regarding authentication  

- `ressources/views/components`  
folder containing all application components  

- folder `readme` you can delete it it only  
contains the component documentation 

## Route  
- for see all routes  
```bash
$ php artisan route:list
```

## Doc of components
- [btn](./readme/btn.md)
- [form](./readme/form.md)
- [icon](./readme/icon.md)
- [input](./readme/input.md)
- [link](./readme/link.md)
- [user](./readme/user.md)