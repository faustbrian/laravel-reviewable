# Laravel Reviewable

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-reviewable
```

And then include the service provider within `app/config/app.php`.

``` php
BrianFaust\Reviewable\ReviewableServiceProvider::class
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

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
