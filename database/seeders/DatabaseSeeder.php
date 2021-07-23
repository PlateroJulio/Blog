<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /* Storage::deleteDirectory('public\storage\posts');
        Storage::makeDirectory('public\storage\posts'); */

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(10)->create();
        $this->call(PostSeeder::class);
    }
}
