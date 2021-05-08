# Lumen TodoAPI Boilerplate

### Usage

**Clone the project and move to the folder**
```bash
git clone https://github.com/fauzan121002/lumen-api-boilerplate.git
cd lumen-api-boilerplate
```

**Setup the project**
```bash
composer install
copy .env.example .env
php artisan key:generate

#after setup your .env database connection
php artisan migrate
```

## Route List

| Routes        | Method        |
| ------------- |:-------------:|
| /api/service  | GET           |
| /api/todo     | GET           |
| /api/todo/{id}| GET           |
| /api/todo     | POST          |
| /api/todo/{id}| PUT           |
| /api/todo/{id}| DELETE        |


register your service provider in `$ROOT/bootstrap/app.php`
