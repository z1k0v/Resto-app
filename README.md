# Resto-app Project Setup

This guide provides step-by-step instructions to set up the Resto-app project in a development environment.

### Prerequisites

Ensure you have the following installed:
- **PHP 8.2**
- **Composer**
- **Node.js 10** and **npm**
- **MySQL** or another supported database

### Setup Instructions

1. **Clone the Repository**:
    ```bash
    git clone <repository_url>
    cd <project_directory>
    ```

2. **Install PHP Dependencies**:
    ```bash
    composer install
    ```

3. **Install Node Dependencies**:
    ```bash
    npm install
    ```

4. **Copy `.env` File**:
    Copy the example environment configuration to a new `.env` file:
    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key**:
    Generate an application key using Artisan:
    ```bash
    php artisan key:generate
    ```

6. **Set Up Database Connection**:
    Open the `.env` file and update the following lines with your database configuration:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

7. **Run Database Migrations and Seed Data**:
    Run the following command to create the database tables and seed initial data:
    ```bash
    php artisan migrate --seed
    ```

8. **Set Up Trip Advisor Development Account**:
    - Create a development account on [Trip Advisor](https://www.tripadvisor.com/).
    - Retrieve your **Trip Advisor Key** and **Host URL**.

9. **Update Trip Advisor Credentials in `.env`**:
    Add the following Trip Advisor credentials to your `.env` file:
    ```env
    TRIP_ADVISOR_KEY=your_trip_advisor_key
    TRIP_ADVISOR_HOST=your_trip_advisor_host
    ```

10. **Serve the Project**:
    Start the development server:
    ```bash
    php artisan serve
    ```

### Environment Details

- **Laravel Version**: 11
- **PHP Version**: 8.2
- **Node Version**: 10

