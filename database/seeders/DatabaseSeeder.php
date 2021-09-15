<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio deleniti quisquam sapiente autem repellat pariatur dolor, quis provident mollitia nisi, at amet! Sint enim facilis soluta sit officia architecto dolor!',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio deleniti quisquam sapiente autem repellat pariatur dolor, quis provident mollitia nisi, at amet! Sint enim facilis soluta sit officia architecto dolor!',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My personal post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio deleniti quisquam sapiente autem repellat pariatur dolor, quis provident mollitia nisi, at amet! Sint enim facilis soluta sit officia architecto dolor!',
        ]);
    }
}
