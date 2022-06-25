<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Post::truncate();

        $user1 = User::factory()->create(['name' => 'John Doe', 'username' => 'johndoe', 'email' => 'johndoe@example.com']);

        $category1 = Category::factory()->create(['name' => 'ViM', 'slug' => 'vim']);
        $category2 = Category::factory()->create(['name' => 'PHP', 'slug' => 'php']);
        $category3 = Category::factory()->create(['name' => 'Magento 2', 'slug' => 'magento-2']);

        Post::factory(5)->create(['user_id' => $user1->id, 'category_id' => $category1->id]);
        Post::factory(5)->create(['user_id' => $user1->id, 'category_id' => $category2->id]);
        Post::factory(5)->create(['user_id' => $user1->id, 'category_id' => $category3->id]);
        Post::factory(20)->create();
    }
}
