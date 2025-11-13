# LaraEcommerce

![GitHub license](https://img.shields.io/badge/license-Not%20Specified-blue.svg?style=for-the-badge)
![GitHub stars](https://img.shields.io/github/stars/rushi0612/laraecommerce?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/rushi0612/laraecommerce?style=for-the-badge)

LaraEcommerce is a modern e-commerce platform built with the Laravel framework. This project provides a robust and scalable foundation for building fully-featured online stores, leveraging the power of PHP and the elegant Laravel ecosystem for a clean and maintainable codebase.

---

## 🚀 Key Features

*   **Product Catalog:** A comprehensive system for managing and displaying products with details, images, and pricing.
*   **User Authentication:** Secure registration and login functionality for customers.
*   **Shopping Cart System:** A dynamic shopping cart that allows users to add, update, and remove items before checkout.
*   **Responsive Frontend:** A clean user interface built with Blade, SCSS, and JavaScript, ensuring a great experience on both desktop and mobile devices.
*   **Admin Dashboard (TBD):** Foundation for a backend panel to manage products, orders, and customers.

---

## 🛠️ Tech Stack

*   **Backend:** PHP, Laravel
*   **Frontend:** Blade, HTML, SCSS, CSS, JavaScript
*   **Database:** Configurable (e.g., MySQL, PostgreSQL, SQLite)
*   **Dependency Management:** Composer (PHP), NPM (JavaScript)
*   **Build Tool:** Vite

---

## ⚙️ Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

*   PHP (>= 8.1)
*   Composer
*   Node.js & NPM
*   A local database server (e.g., MySQL, MariaDB)

### Installation

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/rushi0612/laraecommerce.git
    ```

2.  **Navigate to the project directory:**
    ```sh
    cd laraecommerce
    ```

3.  **Install PHP dependencies:**
    ```sh
    composer install
    ```

4.  **Install JavaScript dependencies:**
    ```sh
    npm install
    ```

5.  **Create your environment file:**
    ```sh
    cp .env.example .env
    ```

6.  **Generate an application key:**
    ```sh
    php artisan key:generate
    ```

7.  **Configure your database:**
    Open the `.env` file and update the `DB_*` variables with your database credentials.
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laraecommerce
    DB_USERNAME=root
    DB_PASSWORD=
    ```

8.  **Run database migrations and seeders:**
    ```sh
    php artisan migrate --seed
    ```

9.  **Start the development servers:**
    *   In one terminal, start the Vite server for frontend assets:
        ```sh
        npm run dev
        ```
    *   In another terminal, start the Laravel server:
        ```sh
        php artisan serve
        ```

---

## 📖 Usage

Once the application is installed and running, you can access it in your browser at the address provided by `php artisan serve`, typically `http://127.0.0.1:8000`.

You can browse the product catalog, register for a new account, log in, and add items to your shopping cart.

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---
