# Laravel Project
# Author: Khalil Maihoub

This is a Laravel-based project that can be run either using **Docker** or directly on your local machine (without Docker). Below are detailed steps for both options.

---

## **1. Running the Project with Docker**

### **Prerequisites**
- Ensure you have Docker and Docker Compose installed on your computer:
  - [Download Docker](https://www.docker.com/)

---

### **Steps**

1. Clone the repository:
   ```bash
   git clone https://github.com/khalil22393/RussianAddress.git
   cd laravel-project
   ```

2. Copy the `.env.example` file to `.env` 
   ```bash
   cp .env.example .env
   ```

3. Build and start the Docker containers:
   ```bash
   docker-compose up --build
   ```

5. Access the application in your browser at:
   `http://localhost:8000`

---

## **2. Running the Project Without Docker**

### **Prerequisites**
- PHP 8.1 or higher
- Composer
- MySQL
- Node.js & npm

---

### **Steps**

1. Clone the repository:
   ```bash
   git clone https://github.com/khalil22393/RussianAddress.git
   cd laravel-project
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install JavaScript dependencies using npm:
   ```bash
   npm install && npm run dev
   ```

4. Copy the `.env.example` file to `.env` and set the appropriate database credentials:
   ```bash
   cp .env.example .env
   ```

5. Run the database migrations and optionally seed the database:
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

6. Serve the application locally:
   ```bash
   php artisan serve
   ```

7. Access the application in your browser at:
   `http://localhost:8000`

---

## **3. Additional Notes**

- **Database Setup**: If using Docker, the database credentials in `.env` should match the values in `docker-compose.yml`. By default:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=geo_locations_in_russia
  DB_USERNAME=root
  DB_PASSWORD=root
  ```

- **Seeders**: You can add or update database seeders as needed and re-run `php artisan db:seed --force`.

- **Cache**: When making changes to the Laravel config files, remember to clear and rebuild the cache:
  ```bash
  php artisan config:clear
  php artisan config:cache
  ```
