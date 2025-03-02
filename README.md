# Venue Management System

## Setup and Run

### Prerequisites

- PHP ^8.2
- Composer
- Node.js and npm

### Installation

1. **Clone the repository:**
   git clone https://github.com/mohamedsaeed189/Venue-Management-System

2. **Change directory to  project directory:**
  cd venue-management-system

3. **Install PHP dependencies:**
    composer install

4. **Install Node.js dependencies:**
    npm install

5. **Copy the example environment file and configure the environment variables:**
    cp .env.example .env

6. **Generate the application key:**
    php artisan key:generate

7. **Run database migrations:**
    php artisan migrate

8. **Run the development server:**
    php artisan serve

9. **Now, you can access the application:**
    http://localhost:8000