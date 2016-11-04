<?php

namespace BrianFaust\Reviewable\Contracts;

use Illuminate\Database\Eloquent\Model;

interface Reviewable
{
    public function reviews();

    public function review($data, Model $author, Model $parent = null);

    public function updateReview($id, $data, Model $parent = null);

    public function deleteReview($id);
}
