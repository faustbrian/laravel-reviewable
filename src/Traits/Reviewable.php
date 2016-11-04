<?php

namespace BrianFaust\Reviewable\Traits;

use BrianFaust\Reviewable\Models\Review;
use Illuminate\Database\Eloquent\Model;

trait Reviewable
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
