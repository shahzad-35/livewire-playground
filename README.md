# Livewire Playground

This is a Laravel project that demonstrates the use of Livewire components for building dynamic interfaces without leaving the comfort of Laravel.

## Features

- **Livewire Components**: Real-time search and greeting functionalities.
- **Tailwind CSS**: For styling the application.
- **Vite**: For building and bundling assets.
- **SQLite**: As the database for storing data.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/your-username/livewire-playground.git
    cd livewire-playground
    ```

2. Install PHP dependencies:

    ```sh
    composer install
    ```

3. Install JavaScript dependencies:

    ```sh
    npm install
    ```

4. Copy the example environment file and configure the environment variables:

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Run the database migrations and seeders:

    ```sh
    php artisan migrate --seed
    ```

6. Build the assets:

    ```sh
    npm run build
    ```

## Usage

1. Start the development server:

    ```sh
    npm run dev
    ```

2. Open your browser and visit `http://localhost:8000`.

## Livewire Components

### Search Component

The search component allows users to search for articles by title. The search results are displayed in real-time as the user types.

- **View**: [resources/views/livewire/search.blade.php](resources/views/livewire/search.blade.php)
- **Component**: [app/Livewire/Search.php](app/Livewire/Search.php)

### Greeter Component

The greeter component allows users to select a greeting and enter their name. The greeting message is displayed when the form is submitted.

- **View**: [resources/views/livewire/greeter.blade.php](resources/views/livewire/greeter.blade.php)
- **Component**: [app/Livewire/Greeter.php](app/Livewire/Greeter.php)

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).