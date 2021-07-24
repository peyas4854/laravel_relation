<?php

namespace Database\Seeders;

use App\Models\ProjectUser;
use Illuminate\Database\Seeder;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectUser::factory()->times(10)->create();
    }
}
