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

use BrianFaust\Presenter\Presentable;
use BrianFaust\Reviewable\Presenters\ReviewPresenter;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use Presentable;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function reviewable()
    {
        return $this->morphTo();
    }

    public function author()
    {
        return $this->morphTo('author');
    }

    public function createReview(Model $reviewable, $data, Model $author)
    {
        $review = new static();
        $review->fill(array_merge($data, [
            'author_id' => $author->id,
            'author_type' => get_class($author),
        ]));

        $reviewable->reviews()->save($review);

        return $review;
    }

    public function updateReview($id, $data)
    {
        $review = static::find($id);
        $review->update($data);

        return $review;
    }

    public function deleteReview($id)
    {
        return static::find($id)->delete();
    }

    public function getPresenterClass()
    {
        return ReviewPresenter::class;
    }
}
