<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /** if post has not any user then set default guest user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest user'
        ]);
    }

    /** withTimestamps enable timestamps for pivot table
     *  withPivot('status') call additional collum form pivot table
     *
     * attached PostTag for observe event in  pivot table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class,
            'post_tag',
            'post_id',
            'tag_id')
            ->using(PostTag::class)
            ->withTimestamps()
            ->withPivot('status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments(){

        return $this->MorphMany(Comment::class,'commentable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function comment(){

        return $this->morphOne(Comment::class,'commentable');
    }



}
