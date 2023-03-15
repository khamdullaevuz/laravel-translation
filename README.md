# Laravel translation package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/khamdullaevuz/laravel-translation.svg?style=flat-square)](https://packagist.org/packages/khamdullaevuz/laravel-translation)
[![Total Downloads](https://img.shields.io/packagist/dt/khamdullaevuz/laravel-translation.svg?style=flat-square)](https://packagist.org/packages/khamdullaevuz/laravel-translation)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require khamdullaevuz/laravel-translation
```

Add the service provider to your `config/app.php`:

```php
// config/app.php
'providers' => [
    ...
    Khamdullaevuz\LaravelTranslation\TranslationServiceProvider::class,
];
```

You can run the migrations with:

```bash
php artisan migrate
```

## Usage

Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khamdullaevuz\LaravelTranslation\Facades\Translation;

class Product extends Model
{
    use HasFactory, Translation;

    protected $fillable = [
        'name',
        'amount',
    ];

    protected $translatable = [
        'name',
    ];
}
```

### Create
Use with model
```php

$product = Product::create([
    'name' => 'Product 1',
    'amount' => 100,
]);

$product->translations()->create([
    'table_name' => 'products',
    'column_name' => 'name',
    'value' => 'Mahsulot 1',
    'locale' => 'uz',
    'foreign_key' => $product->id,
]);
```
Use with facade
```php
use Khamdullaevuz\LaravelTranslation\Facades\Translation;

$product = Product::create([
    'name' => 'Product 1',
    'amount' => 100,
]);
Translation::make('products', 'name', 'Mahsulot 1', 'uz', $product->id);
```

### Get
```php
$product = Product::find(1);

app()->setLocale('uz');
$product->getAttribute('name');
```

## Credits

- [khamdullaevuz](https://github.com/khamdullaevuz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
