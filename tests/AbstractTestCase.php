<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Reviewable;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app): string
    {
        return \BrianFaust\Reviewable\ReviewableServiceProvider::class;
    }
}
