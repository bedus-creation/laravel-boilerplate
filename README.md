<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Laravel Scaffolding

Laravel scaffolding is a basic boilerplate for laravel applications, specially targeted for medium to large level applications. It is configured with some of the must have packages and organized folder structure to manage different classes and files. 

### Packages included

- [doctrine/dbal](https://github.com/doctrine/dbal): Doctrine Database Abstraction Layer for extended database operation (specially in migrations)
- [laracasts/flash](https://github.com/laracasts/flash): Easy flash notifications
- [laravelcollective/html](https://github.com/laravelcollective/html): HTML and Form Builders.
- [prettus/l5-repository](https://github.com/andersao/l5-repository):  Repositories to abstract the database layer.
- [league/fractal](https://fractal.thephpleague.com/): A presentation and transformation layer for complex data output, specially used for RESTful APIs
- [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog): To log activities in models.
- [spatie/laravel-cors](https://github.com/spatie/laravel-cors): To send CORS headers.
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission): For ACL by associating users with roles and permissions.

#### Packages as 'dev dependencies'

- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar): Laravel Debugbar.
- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper): Laravel IDE Helper.

## Installation

## Inbuilt Features

- Supported for different services like: **front-office**, **back-office**, **authentication** and **API**s services.
- Webpack configured for basic **js** and **sass** along with **vuejs**
- **Login**: Customized laravel's default login scaffold with both username or email supported.
- **Password reset**: Customized to give success message even if email provided is not registered. (For security reason)
- Customized routes, notification emails (email verification and password reset)
- Email not verified warning alert in dashboard, authenticated pages.
- and many more...
