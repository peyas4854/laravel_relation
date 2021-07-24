<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'project_user';
}
