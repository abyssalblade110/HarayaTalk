# HarayaTalk

HarayaTalk is a standalone messaging system that can be easily integrated into any Laravel project. Tired of creating messaging systems over and over again, I decided to create my own well-designed and secure messaging solution using Laravel 11 and Vue 3.

## Features

- **Real-time Messaging**: Instant messaging with real-time updates.
- **User Authentication**: Secure user authentication and authorization.
- **Scalable Architecture**: Built with scalability in mind to handle a growing user base.
- **Modern Frontend**: Utilizes Vue 3 for a responsive and dynamic user interface.
- **Secure**: Implements best practices for security to protect user data.

## Installation

1. Require the package via Composer:
composer require harayatech/haraya-talk


2. Publish the configuration files:
php artisan vendor:publish --provider="HarayaTalk\Providers\HarayaTalkServiceProvider"


3. Run the migrations:
php artisan migrate


4. Install frontend dependencies:
npm install

5. Compile the assets:
npm run dev


## Usage

1. Add the HarayaTalk routes to your `routes/web.php` file:
HarayaTalk::routes();


2. Include the HarayaTalk components in your Vue application:
import HarayaTalk from 'haraya-talk';
Vue.use(HarayaTalk);


3. Start the Laravel development server:
php artisan serve



4. Access the messaging system at `http://localhost:8000/haraya-talk`.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss any changes.

## License

HarayaTalk is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Acknowledgements

Special thanks to the Laravel and Vue.js communities for their amazing frameworks and tools.