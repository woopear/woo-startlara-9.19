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

- `vendor/laravel/fortify/src/Rules/Password.php`  
you can modify the password validation rules and  
also the error messages linked to the password,  
default language is English, [you see this](./readme/rules-password-french.md) for french  

- `lang/en`  
look this folder and all files for change langage  
and update phrasing with your language.

- folder `readme` you can delete it it only  
contains the component documentation 

## Route  
- for see all routes  
```bash
$ php artisan route:list
```

## Doc of components  

> for a better understanding, pages have been created  
> to use certain components, but you can use the components  
> as you see fit.  
> ex: resources/views/component/user/form-update-profil.php  
> is in a page but you are free to use it without a page.  

- [btn](./readme/btn.md)
- [form](./readme/form.md)
- [icon](./readme/icon.md)
- [input](./readme/input.md)
- [link](./readme/link.md)
- [user](./readme/user.md)  

## validation && error form  

- using `session('status')` for validation messages  
and `$error` for form error handling. For errors,  
the input component only manages this, for validation  
we use a partial session-notif which is in the private layout  

## the different identification functions  

- `creation of the user`, access to the register page  
then fill in the form click on the button of the form,  
this will create the account and send an email  
to validate the email address, if you do not validate you will not  
be able to access the account.  

- basic user login  

- `forgotten password`, fill in the email,  
send the reset email, click in the email,  
redirect to the password modification page,  
fill in the form, modify the password redirect to the login page  

- `modification of the password`, request confirmation  
of the password of the connected user,  
access to the page for modifying the password