03/10/2022
Laravel Guestbook

Developed using Laravel Framework 7.30.6

Developed using PHP 7.2.5

**To Install Composer Packages**

1) Go to cmd or terminal
2) Make sure you are in the right path (project folder directory)
3) use cd project_name to go inside the folder and cd .. to go back up out of the folder
4) In the terminal use the command composer install 
5) Your vendor folder is installed

NOTE: If you dont have composer  already, to Install it https://getcomposer.org/download/

Refer: https://laravel.com/

To view the login page.
http://127.0.0.1:8000/login

**Run Migrations & Seeders** 

1. php artisan migrate 
2. php artisan db:seed

You can also register as a new user and login.
please refer user table for admin credentials.

**To start the server:**

php artisan server


**To start the server You can also register as a new user and login**

please refer user table for admin credentials or use below credentials.


**To run PHP Unit Tests**

custom test cases are written in C:\xampp\htdocs\guestbook\tests\Feature
php artisan test

**Steps to do for updating database connection**

1 ) Open phpmyadmin (https://localhost/phpmyadmin)

2 ) Use newly created table name in .env file to connect.

3 ) To run manual querys select database and table to update ex:(UPDATE `users` SET `email` = 'satish@gmail.com' WHERE `users`.`id` = 3)


**To import DB**

please use sql file in below location
guestbook\database\bk

 