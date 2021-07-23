<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'post_tag';


    /**
     *  call created event when post_tag data create.
     */

    public static function boot()
    {
        parent::boot(); // TODO: moved method to another observer class

        static::created(function ($post) {
//            dd('created', $post);

        });

        static::deleted(function ($post) {
//            dd('deleted', $post);
        });
    }
}
