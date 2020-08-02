<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
    }
}
