# Clone your project and run

1.Go to the folder application using cd command on your cmd or terminal

2.Run composer install on your cmd or terminal

3.Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu

4.Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

5.Run php artisan key:generate

6.Run php artisan migrate
Run php artisan serve

# Adding Jetstream Login/Signup form

1.composer require laravel/jetstream

2.php artisan jetstream:install livewire

3.npm install

4.npm run dev

5.php artisan migrate
