<?php

namespace BrianFaust\Reviewable;

use BrianFaust\Reviewable\Review;
use Illuminate\Database\Eloquent\Model;

trait HasReviewsTrait
{
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function createReview($data, Model $author, Model $parent = null)
    {
        return (new Review())->createReview($this, $data, $author);
    }

    public function updateReview($id, $data, Model $parent = null)
    {
        return (new Review())->updateReview($id, $data);
    }

    public function deleteReview($id)
    {
        return (new Review())->deleteReview($id);
    }

    public function getRating()
    {
        return round($this->reviews()->avg('rating'));
    }
}
