<?php

/*
 * This file is part of Laravel Reviewable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Reviewable;

use BrianFaust\ServiceProvider\ServiceProvider;

class ReviewableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishMigrations();
    }

    public function getPackageName()
    {
        return 'reviewable';
    }
}
