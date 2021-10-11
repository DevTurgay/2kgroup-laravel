<div id="top"></div>

<!--
*** Author: Turgay Ali
*** Date: 10.08.2021
-->



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">MVC Task Example (Laravel)</h3>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#required-php-extensions">Required PHP Extensions</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Just a simple MVC (Laravel) project to retrieve data from db and parse to view

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* PHP 7.4+
* Laravel 8
* MySql
* Javascript(Jquery)
* BOOTSTRAP

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started


### Required PHP Extensions:
1. BCMath
2. Ctype
3. JSON
4. Mbstring
5. OpenSSL
6. PDO
7. Tokenizer
8. XML

### Installation

1. [Get composer](https://getcomposer.org/download/)
2. Clone the repo
   ```sh
   git clone https://github.com/DevTurgay/2kgroup-mvc-laravel.git
   ```
3. Install NPM packages
   ```sh
   composer update
   ```
4. Create .env file (based on .env.example) and update the DataBase credentials
5. Run db migrate
   ```sh
   php artisan migrate
   ```
6. Run db seeders
   ```sh
   php artisan db:seed
   ```
7. Generate key
   ```sh
   php artisan key:generate
   ```
8. Run the server
   ```sh
   php artisan serve
   ```

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

Just browse the root directory of server (localhost:8000/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Add Migartion Class
- [x] Add Seeding Class
- [x] HomeController
- [x] BetController (for delete feature)
- [x] Bet Model

<p align="right">(<a href="#top">back to top</a>)</p>
