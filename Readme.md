## What is SPG
* SPG mean Strong Password Generator.
* SPG Generate Strong password with some stuff.
* SPG Created by PHP and OOP Design.
* SPG Can save who used, with ip and saved password.

## Why we use SPG
* Because is an offline password generator.
* Easy for Development.

---

## For Developer
### 1. First step of Develop or run Project you sould to install Composer Package. (it's to important)

```php
composer install
```
### 2. After install composer you should to config a .env file like this
```php
RootPath = "/Applications/XAMPP/xamppfiles/htdocs/SPG" --> enter you're root path in here

DB_ENGINE = "mysql" --> you're storage engine
DB_HOST = "localhost" --> you're host
DB_NAME = "SPG_DB" --> you're database name for storage user ip and password
DB_USER = "root" --> you're password for login
DB_PASSWORD = --> if you have password for login in to, fill it
```
### 3. After config .env file you should to change MAIN_PATH in init.php in this path, bootstap > init.php ->
```php
define("MAIN_PATH", "/Applications/XAMPP/xamppfiles/htdocs/SPG/" --> change this); 

```
After these you can start Developing.

---
## Architecture

### We have some folder but these are very important and very important to you to should you to put any things in the true place.

| App       | bootstrap | helper | View |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| Controller      | init.php       | helpers.php | home
| Requests   |         | 
| Model   |
| Utilities   |

1. App Folder
    - App folder for All Actions in you're program.
    - in Controller Folder, you can put you're controller in here
    - Request Folder, Request Folder for routing file and request processing file.
    - Model, Models Folder for you're model to connection and action to you're database.
    - Utilities, Utilities folder for put you're Utilities you needed.

2. bootstrap Folder
    - bootstrap folder for init file or can named it main file. 
    - you can change it when you needed.

3. helper Folder
    - helper Folder for helpers file you can put it in.
    - i put a helper a think i can use it, View() helper.
    - View() helper for load a view (template).

4. View Folder
    - View Folder for you're template.
    - you can put you're tamplate in here, like this 'helper > home > index.php'
    or 'helper > about > index.php'

---
#### i wish can help you with this mini project.
#### if you use this, i will be happy to email me you used it.

### Contact to me
- my email is: alireza.karimi.programmer@gmail.com
- my telegram username: [Alirez0K](https://t.me/Alirez0K)