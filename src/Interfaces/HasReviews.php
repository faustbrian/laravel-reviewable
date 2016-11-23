<?php

/*
 * This file is part of Laravel Reviewable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Reviewable\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface HasReviews
{
    public function reviews();

    public function createReview($data, Model $author, Model $parent = null);

    public function updateReview($id, $data, Model $parent = null);

    public function deleteReview($id);
}
