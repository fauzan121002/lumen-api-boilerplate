#Lumen TodoAPI Boilerplate
## Author : Muhammad Fauzan

What's inside?

* Service Provider & Service Container
* API Controllers & Routes

### Usage

1. git clone https://github.com/fauzan121002/lumen-api-boilerplate.git
2. cd lumen-api-boilerplate
3. composer install
4. rename .env.example to .env
5. set up your database connection on .env
6. php artisan migrate

## Route List
| Routes        | Methods       |
| ------------- |:-------------:|
| /api/service  | GET           |
| /api/todo     | GET           |
| /api/todo/{id}| GET           |
| /api/todo     | POST          |
| /api/todo/{id}| PUT           |
| /api/todo/{id}| DELETE        |

check out ROOT/routes/web.php

## Register Your Service Provider

check out ROOT/bootstrap/app.php

#Enjoy!!! @smile
