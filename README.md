<h1 align="center">Laravel 11 Mazer Dashboard</h1>

![Mazer Screenshot](https://user-images.githubusercontent.com/45036724/167523601-9d20fb17-1989-488f-b619-cb53c0db8898.png)

<p align="center">Laravel 11 Mazer is an Admin Dashboard Template and upgraded version from previous references and some fixes included.</p>
<div align="center">

</div>

## Installation

1. Clone this project
    ```bash
    git clone https://github.com/J3ndra/laravel-11-mazer laravel-mazer
    cd laravel-mazer
    ```
2. Install dependencies

    ```bash
    composer install
    ```

    And javascript dependencies

    ```bash
    yarn install && yarn dev

    #OR

    npm install && npm run dev
    ```

3. Set up Laravel configurations

    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database

    ```bash
    php artisan migrate --seed
    ```

6. Serve the application

    ```bash
    php artisan serve
    ```

7. Login credentials

    ```bash
    Email    : webmaster@example.com
    Password : password
    ```

## Features

- [X] Login, Register
- [X] Edit profile and password
- [X] Light / Dark mode

## References

- [Laravel Mazer Starter](https://github.com/billalxcode/laravel-mazer-starter) by [billaxcode](https://github.com/billalxcode)

- [Mazer](https://github.com/zuramai/mazer) by [zuramai](https://github.com/zuramai)

## Todo

- [ ] Remove unused code
- [ ] Added more plugin from original [Mazer](https://github.com/zuramai/mazer)

<h1 align="center">Gallery</h1>

![Mazer Dashboard Screenshot](./screenshots/Screenshot%202024-06-07%20121423.png)

![Mazer Profile Screenshot](./screenshots/Screenshot%202024-06-07%20121439.png)

![Mazer Login Screenshot](./screenshots/Screenshot%202024-06-07%20121451.png)
