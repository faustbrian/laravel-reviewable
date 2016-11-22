<?php

namespace BrianFaust\Tests\Reviewable;

use BrianFaust\Reviewable\Review;
use BrianFaust\Reviewable\Interfaces\HasReviews;

class ReviewTest extends AbstractTestCase
{
    public function testConstructor()
    {
        $review = new Review();
        $this->assertNotNull($review);

        $this->assertEquals($review->getPresenterClass(), \BrianFaust\Reviewable\Presenters\ReviewPresenter::class);
    }
}
