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

use Illuminate\Database\Eloquent\Model;

trait HasReviews
{
    public function reviews()
    {
        return $this->morphMany(config('reviewable.models.review'), 'reviewable');
    }

    public function createReview($data, Model $author, Model $parent = null)
    {
        return $this->getNewReviewMode()->createReview($this, $data, $author);
    }

    public function updateReview($id, $data, Model $parent = null)
    {
        return $this->getNewReviewMode()->updateReview($id, $data);
    }

    public function deleteReview($id)
    {
        return $this->getNewReviewMode()->deleteReview($id);
    }

    public function getRating()
    {
        return round($this->reviews()->avg('rating'));
    }

    private function getNewReviewMode()
    {
        $model = config('reviewable.models.review');

        return new $model;
    }
}
