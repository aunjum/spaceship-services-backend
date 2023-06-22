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
![Db Image](https://github.com/aunjum/spaceship-services-backend/blob/main/instructions/ss/1_create-db.png)

### Step 4: Open new terminal and run below commands

```bash
  composer install
  php artisan make:migration create_sections_table --create=sections [not neccessary]
  php artisan migrate 
  php artisan storage:link 
  php artisan serve
```
![Db Migrate](https://github.com/aunjum/spaceship-services-backend/blob/main/instructions/ss/2_db-migrate.png)

### Step 5.0: Open your API testing app Ex: postman and import [spaceship-services.postman_collection.json](https://github.com/aunjum/spaceship-services-backend/blob/main/instructions/spaceship-services.postman_collection.json) or folow below instruction to create and get records

### Step 5.1: Create record by follwing this [instruction](https://github.com/aunjum/spaceship-services-backend/blob/main/instructions/upload.txt) and this [assets](https://github.com/aunjum/spaceship-services-backend/tree/main/instructions/assets)

![Create Record](https://github.com/aunjum/spaceship-services-backend/blob/main/instructions/ss/3_store-data.png)

### Step 5.2: Check if all record are stored

![Show record](https://github.com/aunjum/spaceship-services-backend/blob/main/instructions/ss/4_get-data.png)

### Step 6: Now let's install our [frontend] (https://github.com/aunjum/spaceship-services-frontend)
