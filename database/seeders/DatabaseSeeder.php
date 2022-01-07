<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // \App\Models\Post::factory(5)->state('publised_at')->make();
        // \App\Models\Post::factory(5)->count(5)->published()->create();
        \App\Models\Post::factory(10)->create();
        // DB::table('admins')->insert([
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => bcrypt('admin123'),
        //     ]
        // ]);
    }
}
