<?php

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
