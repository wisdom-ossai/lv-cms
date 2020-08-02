<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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

    }
}
