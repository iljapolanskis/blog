<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
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
        $user1 = User::factory()->create(['name' => 'John Doe', 'username' => 'johndoe', 'email' => 'johndoe@example.com']);
        $user2 = User::factory()->create(['name' => 'Bob Doe', 'username' => 'bobdoe', 'email' => 'bobdoe@example.com']);
        $user3 = User::factory()->create(['name' => 'Glenn Doe', 'username' => 'glenndoe', 'email' => 'glenndoe@example.com']);

        $category1 = Category::factory()->create(['name' => 'ViM', 'slug' => 'vim']);
        $category2 = Category::factory()->create(['name' => 'PHP', 'slug' => 'php']);
        $category3 = Category::factory()->create(['name' => 'Magento 2', 'slug' => 'magento-2']);

        $post01 = Post::factory()->create(['user_id' => $user1->id, 'category_id' => $category1->id]);
        $post02 = Post::factory()->create(['user_id' => $user1->id, 'category_id' => $category2->id]);
        $post03 = Post::factory()->create(['user_id' => $user1->id, 'category_id' => $category3->id]);
        $post04 = Post::factory()->create(['user_id' => $user2->id, 'category_id' => $category1->id]);
        $post05 = Post::factory()->create(['user_id' => $user2->id, 'category_id' => $category2->id]);
        $post06 = Post::factory()->create(['user_id' => $user2->id, 'category_id' => $category3->id]);
        $post07 = Post::factory()->create(['user_id' => $user3->id, 'category_id' => $category1->id]);
        $post08 = Post::factory()->create(['user_id' => $user3->id, 'category_id' => $category2->id]);
        $post09 = Post::factory()->create(['user_id' => $user3->id, 'category_id' => $category3->id]);
        $post10 = Post::factory()->create(['user_id' => $user3->id, 'category_id' => $category1->id]);

        // Post 01
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post01->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post01->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post01->id]);
        // Post 02
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post02->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post02->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post02->id]);
        // Post 03
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post03->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post03->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post03->id]);
        // Post 04
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post04->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post04->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post04->id]);
        // Post 05
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post05->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post05->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post05->id]);
        // Post 06
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post06->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post06->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post06->id]);
        // Post 07
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post07->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post07->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post07->id]);
        // Post 08
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post08->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post08->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post08->id]);
        // Post 09
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post09->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post09->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post09->id]);
        // Post 10
        Comment::factory(1)->create(['user_id' => $user1->id, 'post_id' => $post10->id]);
        Comment::factory(2)->create(['user_id' => $user2->id, 'post_id' => $post10->id]);
        Comment::factory(1)->create(['user_id' => $user3->id, 'post_id' => $post10->id]);

    }
}
