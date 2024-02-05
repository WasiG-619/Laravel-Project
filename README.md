# Laravel Project

## Description

This Laravel project showcases advanced web engineering methods using server-side processes with PHP Laravel, MySQL database, and incorporates libraries like Breeze for authentication and Tailwind CSS for styling.

## Features

- **Laravel Framework:**
  - Utilizes Laravel for server-side processing.
  - Routing and use of HTTP verbs

- **Database Integration:**
  - Integrates with MySQL database for data storage.

- **Views and Templates:**
  - Utilizes Laravel's Blade templating engine for efficient view management.

- **Authentication System:**
  - Implements user authentication using Laravel Breeze.

- **Usability Features:**
  - **Filtering:** Allows users to filter data based on specified criteria.
  - **Search Functionality:** Incorporates a search feature for user convenience.
  - **Pagination:** pagination for handling large datasets.
  - **Ordering:** Provides options for ordering displayed content.
  - **Error Checking:** Ensures robust error checking mechanisms.
  - **Image Upload:** Supports image upload functionality.

## Getting Started

### Prerequisites

Make sure you have the following installed:

- [PHP](https://www.php.net/) (recommended version)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) (for Tailwind CSS)

### Installation

1. Clone the repository using GIT Bash or Github Desktop:

```bash
git clone https://github.com/WasiG-619/Laravel-Project.git
```
2. Install dependencies:

 ```bash
 composer install
 npm install
```
3. Copy the .env.example file, rename it to .env and configure your database settings.
4. Generate app key:
``` bash
php artisan key:generate
```
5. Run migrations and seed the database:

```bash
php artisan migrate --seed
```
6. Build assets (if using Tailwind CSS):
```bash
npm run dev
```
7. Start the Apache server:

```bash
php artisan serve
```
8. Visit http://localhost:8000 in your browser to access the website.
