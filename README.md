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

**Create Repository**
1. Run command generate
```
php artisan make:repository <name>
```
[Doc](https://github.com/andersao/l5-repository)
2. Bind
RepositoryServiceProvider.php
```php
public function boot()
{
    // ...
    $this->app->bind(<name>Repository::class, <name>RepositoryEloquent::class);
    //:end-bindings:
}
```
3. Use
```php
public function __construct(<name>Repository $repository)
{
    $this->repository = $repository;
}
```

**Create Service**
1.Create interface and implementation

2. Bind
RepositoryServiceProvider.php
```php
public function boot()
{
    // ...
    $this->app->bind(<name>Service::class, <name>ServiceEloquent::class);
    //:end-bindings:
}
```
3. Use
```php
public function __construct(<name>Service $service)
{
    $this->service = $service;
}
```