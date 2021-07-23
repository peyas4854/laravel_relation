<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Post::factory()->times(20)->create();

        $tag = Tag::factory()->count(5)->create();

        $post = Post::factory()
            ->count(20)
            ->hasAttached($tag)
            ->create();

    }
}
