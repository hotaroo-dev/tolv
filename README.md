<br />

<p align="center">
  <picture>
    <source media="(prefers-color-scheme: dark)" srcset="https://github.com/hotaroo-dev/tolv/raw/master/public/tolv-dark.svg" />
    <source media="(prefers-color-scheme: light)" srcset="https://github.com/hotaroo-dev/tolv/raw/master/public/tolv.svg" />
    <img width="120" src="https://github.com/hotaroo-dev/tolv/raw/master/public/tolv-dark.svg" alt="tolv logo" />
  </picture>
</p>

<br />

<p align="center">
  <img src="https://img.shields.io/badge/laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
  <img src="https://img.shields.io/badge/react-61DAFB?style=for-the-badge&logo=react&logoColor=black" alt="React"/>
</p>

## Requirements

For development, you need to have these installed in your environement.

- `PHP` is an open-source server-side scripting language.
- `Composer` is a tool for dependency management in PHP.
- `Node.js` is an open-source and cross-platform Javascript runtime env.
- `Yarn` is a package manager for Node.js.
- `MySQL` is an open-source relational database.

### PHP / Composer

First you need to have [Scoop](https://scoop.sh/) (A command-line installer for Windows) installed in your pc.

- Install PHP and Composer via Scoop

      scoop install php composer

- If the installation was successful, you should be able to run the following command.

      php --version
      PHP 8.2.4 (cli) ...

      compoesr --version
      Composer version 2.5.4 ...

### Node

If you have node installed, you should be able to run the following command.

    node --version
    v16.16.0

    npm --version
    8.18.0

### Yarn installation

After installing node, this project will need yarn too, so just run the following command.

    npm install -g yarn

---

## Configure File `php.ini`

Run following command to find php.ini path

    php --ini

After that open php.ini with your favorite code editor and uncomment the following lines:

    extension=openssl # to enable OpenSSL
    extension=pdo_mysql # to enable MySQL server

And reload web-server / terminal

---

## Install

     git clone --recursive https://github.com/hotaroo-dev/tolv.git

There are 2 steps you need to do to get it setup to start working on your system.

- **Step 1** `Laravel` backend

  1.  cd into laravel project

      ```
      cd tolv
      ```

  2.  Install Composer Dependencies

      ```
      composer install --ignore-platform-reqs
      ```

  3.  Create a a copy of your .env file

      ```
      cp .env.example .env
      ```

  4.  Migrate the database

      start MySQL server frist (MySQL standalone or via XAMPP) before you run command below

      ```
      php artisan migrate
      ```

  5.  Running app on the PHP dev server

      ```
      php artisan serve
      ```

- **step 2** `React` frontend

  open another terminal window

  1. cd into react project

     ```
     cd react
     ```

  1. Install Dependencies

     ```
     yarn
     ```

  1. Change admin name (based on email name) in .env file:

     ```
     VITE_ADMIN=hiro # hiro@example.com
     ```

  1. Starts the dev server

     ```
     yarn dev
     ```

I Think Everyone Deserves A Nap ㅜㅜ

---
