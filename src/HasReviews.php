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
