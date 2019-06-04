# Laravel Reviewable

[![Build Status](https://img.shields.io/travis/artisanry/Reviewable/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Reviewable)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/reviewable.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Reviewable.svg?style=flat-square)](https://github.com/artisanry/Reviewable/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Reviewable.svg?style=flat-square)](https://packagist.org/packages/artisanry/Reviewable)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/reviewable
```

To get started, you'll need to publish the vendor assets and migrate:

```
php artisan vendor:publish --provider="Artisanry\Reviewable\ReviewableServiceProvider" && php artisan migrate
```

## Usage

### Setup a Model
``` php
<?php

namespace App;

use Artisanry\Reviewable\HasReviews;
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

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
