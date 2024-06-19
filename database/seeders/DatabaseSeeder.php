<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\city;
use App\Models\latucher;
use App\Models\user;
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
        // Student::factory()->count(3)->create();
        // $this->call([
        //     StudentSeeder::class
        // ]);
        user::factory()->count(20)->create();
        city::factory()->count(20)->create();
        latucher::factory()->count(20)->create();
    }
}
