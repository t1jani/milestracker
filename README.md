<p align="center"><a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Miles Tracker

Miles Tracker is kinda like Strava but without the bloat. It lets you do one thing and one thing only "KEEP TRACK OF THEM MILES BOY". This came to existence because keeping track of things in an excel sheet to see how many miles I rode in a week was getting boring.

It is built using laravel, SQLite and Tailwind CSS as its database, nothing fancy just economical. 

To see the technical documentation for this application, click [here](docs/milestracker-technical.pdf)

## Hacking on Miles Tracker

If you are the type who just wants to see how the damn thing works, then follow these instructions on how to set things up on your development machine but you've gotta satisfy some dependencies first:

- Node.js and NPM (they come together if you don't know)
- PHP (the entire application is written in PHP)
- Composer (just like NPM but for PHP)
- SQLite (this is what I recommend but then again I can't tell you what to do).

Once you have satisfied these dependecies, then here comes the fun part:

- Install the composer dependecies: `composer update`.
- Copy the content in the `.env.example` into a `.env`.
- Create a `database.sqlite` in the `database` folder.
- Copy the absolute path of `database.sqlite` to the `DB_DATABASE` field in the `.env` file.
- Run `php artisan key:generate` for an application key.
- Run `php artisan migrate` to create the database tables.
- Run `php artisan db:seed` for some dummy data.
- Install and compile the fronend dependecies for development using `npm install && npm run dev`.
- Run `php artisan serve` if you don't have valet installed. 
-  ***(optiona)*** To be able to use the email features available in the application, you can use Mailtrap or Mailhog whichever you prefer. You would have to change the settings in the .env if you are using Mailtrap, Mailhog comes supported out of the box.

## Contributing

Got some idea for improvement, fork it, make you improvements and then send in a pull request, easy peasy squeezy lemon squeezy.

## License

Miles Tracker is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
