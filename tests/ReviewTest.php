<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Reviewable;

use BrianFaust\Reviewable\Review;

class ReviewTest extends AbstractTestCase
{
    public function testConstructor()
    {
        $review = new Review();
        $this->assertNotNull($review);

        $this->assertEquals($review->getPresenterClass(), \BrianFaust\Reviewable\Presenters\ReviewPresenter::class);
    }
}
