<?php

namespace BrianFaust\Tests\Reviewable;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\Reviewable\ServiceProvider::class;
    }
}
