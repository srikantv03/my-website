# My-Website
Repository with the code for my website, hosted [here](http://srikantv.com)

## Dependencies

### Dependency Manager (PHP)

This project uses the [Composer Dependency Manager](https://getcomposer.org/) to handle the php dependencies

Command line installation is simple using the following script
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

- [Dotenv](https://github.com/vlucas/phpdotenv)

This is a package that allows for integration of .env files into php code. Environment variables (.env) contain sensitive information such as API keys or db connection info that one might not want to include in version control.

You can install dotenv with composer with one easy command in the root directory of your project
```
$ composer require vlucas/phpdotenv
```

- [MySQL](https://www.mysql.com/)

This is the relational database management system that I used for this project. I primarily used MySQL to create and update the SQL database as needed to accomodate my project

- [Bootstrap](https://getbootstrap.com)

This is a CSS framework I used to help me style my website. I heavily modified parts of the css to fit the needs of my website.

## Login

The login for this website is to allow for the admin (me) to upload images, projects and other data to the sql database/the server to display on the website without having to use the ftp everytime.

This feature will be expanded to gain larger control over the website through a GUI interface.
