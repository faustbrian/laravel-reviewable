# Laravel Reviewable

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Reviewable/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Reviewable)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-reviewable.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Reviewable.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Reviewable/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Reviewable.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Reviewable)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-reviewable
```

To get started, you'll need to publish the vendor assets and migrate:

```
php artisan vendor:publish --provider="BrianFaust\Reviewable\ReviewableServiceProvider" && php artisan migrate
```

## Usage

### Setup a Model
``` php
<?php

namespace App;

use BrianFaust\Reviewable\HasReviews;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasReviews;
}
```

### Create a review
``` php
$user = User::first();
$post = Post::first();

$review = $post->createReview([
    'title' => 'Some title',
    'body' => 'Some body',
    'rating' => 5,
], $user);

dd($review);
```

### Update a review
``` php
$review = $post->updateReview(1, [
    'title' => 'new title',
    'body' => 'new body',
    'rating' => 3,
]);
```

### Delete a review
``` php
$post->deleteReview(1);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
