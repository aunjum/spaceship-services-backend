# Spaceship Services Backend

## Tech Stack

PHP 8.2.4

Composer 2.5.8

Laravel 4.5.0


## Installation Guide


### Step 1: Clone git repo

```bash
  git clone https://github.com/aunjum/spaceship-services-backend.git
  cd spaceship-services-backend
```

### Step 2: Open the `spaceship-services-backend` folder in your  code editor

### Step 3: Create a new mysql db and config the .env file by coping .env.example file

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_db_name
  DB_USERNAME=your_user_name
  DB_PASSWORD=
```
[db-image](#)

### Step 4: Open new terminal and run below commands

```bash
  composer install
  php artisan make:migration create_sections_table --create=sections [not neccessary]
  php artisan migrate 
  php artisan storage:link 
  php artisan serve
```

### Step 5.0: Open your API testing app Ex: postman and import [spaceship-services.postman_collection.json](#) or folow the ss to create and get records

### Step 5.1: Upload record by follwing this [instruction](#)

[api-image](#)

### Step 5.2: Check if all record are stored

[api-image](#)

[db-image](#)


