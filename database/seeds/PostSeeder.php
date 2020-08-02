<?php

use App\Category;
use App\Post;
use App\Tag;
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
        $post1= Post::create([
            'title' => 'Design Trends for 2017 - Main Guidelines',
            'description' => 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul.',
            'content' => 'Etiam nec odio vestibulum est mattis effic iturut magna. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a hendrerit elit, quis maximus urna. Fusce urna ex, fermentum ut ornare eleifend, interdum ut quam. Suspendisse eu eros quis justo semper tempor eu nec quam. Nunc quis feugiat elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper condimentum odio vel eleifend. Morbi iaculis rhoncus justo quis pharetra. Quisque eleifend, turpis eget maximus accumsan, ipsum libero dapibus nisl, eu varius urna urna sit amet nulla. Donec a ultrices ex, quis cursus neque. Sed eget accumsan nibh. Mauris interdum, leo in sodales convallis, metus tellus pulvinar turpis, nec euismod ex purus ac est. Sed sed velit a libero auctor ullamcorper. Nullam facilisis posuere purus. In auctor ante vel dictum vehicula.',
            'img_url' => 'https://cdn.wallpapersafari.com/74/24/aYCjEg.jpg',
            'published_at' => now(),
            'category_id' => 1,
            // 'tags' => [3, 2]
        ]);
        $post2 = Post::create([
            'title' => '10 great tips to run your design business',
            'description' => 'Curabitur ornare pellentesque risus, id facilisis urna aliquet vel. Nullam mi est, malesuada consectetur suscipit eget, pharetra pulvinar massa.',
            'content' => 'Curabitur semper condimentum odio vel eleifend. Morbi iaculis rhoncus justo quis pharetra. Quisque eleifend, turpis eget maximus accumsan, ipsum libero dapibus nisl, eu varius urna urna sit amet nulla. Donec a ultrices ex, quis cursus neque. Sed eget accumsan nibh. Mauris interdum, leo in sodales convallis, metus tellus pulvinar turpis, nec euismod ex purus ac est. Sed sed velit a libero auctor ullamcorper. Nullam facilisis posuere purus. In auctor ante vel dictum vehicula.',
            'img_url' => 'https://images5.alphacoders.com/944/thumb-350-944019.jpg',
            'published_at' => now(),
            'category_id' => 2,
            // 'tags' => [1, 2]
        ]);
        $post3 = Post::create([
            'title' => 'March European Design Congress',
            'description' => 'Etiam nec odio vestibul. Morbi tincidunt interdum ex quis eleifend. Curabitur ornare pellentesque risus, id facilisis urna aliquet vel. Nullam mi est, malesuada consectetur suscipit eget, pharetra pulvinar massa',
            'content' => 'Suspendisse eu eros quis justo semper tempor eu nec quam. Nunc quis feugiat elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper condimentum odio vel eleifend. Morbi iaculis rhoncus justo quis pharetra. Quisque eleifend, turpis eget maximus accumsan, ipsum libero dapibus nisl, eu varius urna urna sit amet nulla. Donec a ultrices ex, quis cursus neque. Sed eget accumsan nibh. Mauris interdum, leo in sodales convallis, metus tellus pulvinar turpis, nec euismod ex purus ac est. Sed sed velit a libero auctor ullamcorper. Nullam facilisis posuere purus. In auctor ante vel dictum vehicula.',
            'img_url' => 'https://i.pinimg.com/originals/fb/cb/83/fbcb83b21f125660f26a0b2d399f5257.jpg',
            'published_at' => now(),
            'category_id' => 3,
            // 'tags' => [3, 4]
        ]);
        $post4 = Post::create([
            'title' => 'Blog post with youtube video',
            'description' => 'Nullam mi est, malesuada consectetur suscipit eget, pharetra pulvinar massa.', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a hendrerit elit, quis maximus urna. Fusce urna ex, fermentum ut ornare eleifend, interdum ut quam. Suspendisse eu eros quis justo semper tempor eu nec quam. Nunc quis feugiat elit. Sed eget accumsan nibh. Mauris interdum, leo in sodales convallis, metus tellus pulvinar turpis, nec euismod ex purus ac est. Sed sed velit a libero auctor ullamcorper. Nullam facilisis posuere purus. In auctor ante vel dictum vehicula.',
            'img_url' => 'https://www.pixel4k.com/wp-content/uploads/2018/03/General%20Grievous%20Star%20Wars8885617589.jpg',
            'published_at' => now(),
            'category_id' => 4,
            // 'tags' => [1, 4]
        ]);
        $post5 = Post::create([
            'title' => 'Blog post with vimeo video',
            'description' => 'Morbi iaculis rhoncus justo quis pharetra. Quisque eleifend, turpis eget maximus',
            'content' => ' Morbi iaculis rhoncus justo quis pharetra. Quisque eleifend, turpis eget maximus accumsan, ipsum libero dapibus nisl, eu varius urna urna sit amet nulla. Donec a ultrices ex, quis cursus neque. Sed eget accumsan nibh. Mauris interdum, leo in sodales convallis, metus tellus pulvinar turpis, nec euismod ex purus ac est. Sed sed velit a libero auctor ullamcorper. Nullam facilisis posuere purus. In auctor ante vel dictum vehicula.',
            'img_url' => 'https://c4.wallpaperflare.com/wallpaper/895/480/30/star-wars-battlefront-ii-general-grievous-5k-wallpaper-preview.jpg',
            'published_at' => now(),
            'category_id' => 1,
            // 'tags' => [1, 2, 3, 4]
        ]);


        Tag::create([
            'name' => 'Branding'
        ]);
        Tag::create([
            'name' => 'Webdesign'
        ]);
        Tag::create([
            'name' => 'Design'
        ]);
        Tag::create([
            'name' => 'Investments'
        ]);
        Tag::create([
            'name' => 'Banking Strategies '
        ]);


        Category::create([
            'name' => 'Entertaiment'
        ]);
        Category::create([
            'name' => 'Business & Finance'
        ]);
        Category::create([
            'name' => 'Technology'
        ]);
        Category::create([
            'name' => 'Creative fields'
        ]);
        Category::create([
            'name' => 'Lifestyle & Travel'
        ]);

        $post1->tags()->attach([1, 2]);
        $post2->tags()->attach([4, 2]);
        $post3->tags()->attach([3, 1]);
        $post4->tags()->attach([4, 1]);
        $post5->tags()->attach([3, 2]);
    }
}
