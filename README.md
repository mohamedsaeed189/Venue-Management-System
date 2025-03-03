# Venue Management System

### Prerequisites

- PHP ^8.2
- Composer
- MYSQL

### Installation

1. **Clone the repository:**
    git clone https://github.com/mohamedsaeed189/Venue-Management-System

2. **Change directory to  project directory:**
    cd venue-management-system

3. **Install PHP dependencies:**
    composer install

4. **Create MySQL Database:** 
    venue_management_system

5. **Copy the example environment file and configure the :**
    cp .env.example .env

6. **Configure environment variables [DB_DATABASE, DB_USERNAME, DB_PASSWORD] in .env file**

7. **Generate the application key:**
    php artisan key:generate

8. **Run database migrations:**
    php artisan migrate

9. **Run the development server:**
    php artisan serve

10. **Now, you can access the application:**

### Accessing the endpoints

1. **Open Postman**

2. **Import laravel venue.postman_collection.json file**

3. **Now, you can test the endpoints after bootstraping the app**

