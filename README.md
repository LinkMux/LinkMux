# LinkMux
A url shortener project.

# 需求
- PHP >= 7.1.3
- PHP Extension
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
    - Ctype PHP Extension
    - JSON PHP Extension
    - BCMath PHP Extension
- [Composer](https://getcomposer.org/)
- node >= v9.9.0

# Install
...

# Development
**Install Package**
```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
yarn install
```
**Run server**
```
php artisan serve
```

**Run compiling assets**
```
yarn run watch
```

**Default account info**
- Accound: admin@lmux.dev
- Password: Ab123456