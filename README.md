# What is this project?
It's a Laravel Web Application for getting pieces of information on the https://swapi.dev/ website.

On the SWAPI we can find all information about the Star Wars incredible series.

I developed this project to test my technical skills during a job application.

**Usage** guide can be found down below, keep reading! 🙂 

## Menus:
- People (List of People)
- StarShips (List of StarShips)
- Planets (List of Planets)

### 🔎 Search filters:
name: The name of the Person
name: The name of the StarShip
name: The name of the Planet

## 🆗 watch Next Steps
In this simple project, there are some improves that I will do affter:

- "films": "https://swapi.dev/api/films/",
- "species": "https://swapi.dev/api/species/",
- "vehicles": "https://swapi.dev/api/vehicles/"

## 🚀 Stack
- PHP 8.1
- Bootstrap 5
- Laravel 9

## 🧑‍💻 Running the App

Simply run the command below, and it should be available at http://localhost:[PORT], ready for you to make requests.

You need : git, php, npm 

- git : https://github.com/git-guides/install-git
- php : https://www.php.net/manual/en/install.php
- npm : https://www.npmjs.com/

~~~
git clone https://github.com/ed2ti/swapi-laravel
cd swapi-laravel
yarn install
cd public
php -S localhost:8080
~~~

### Tests

There are feature tests for all important features. To run the tests, run the command below.

Route : '/'
Route : '/people'
Route : '/starships'
Route : '/planets'

~~~
php artisan test
~~~
