<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /** project relation with task HasManyThrough , with pivot table
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function tasks()
    {
        return $this->hasManyThrough(
            Task::class,
            ProjectUser::class,
            'project_id',
            'user_id',
            'id',
            'user_id'

        );
    }


}
