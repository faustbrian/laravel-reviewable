<?php

namespace BrianFaust\Reviewable\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface HasReviews
{
    public function reviews();

    public function createReview($data, Model $author, Model $parent = null);

    public function updateReview($id, $data, Model $parent = null);

    public function deleteReview($id);
}
