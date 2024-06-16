<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use Illuminate\Support\Facades\File;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 👉 main conseft
        // $json = File::get('database/json/user.json');
        // $student = collect(json_decode($json));
        // $student->each(function($stu){
        //     // user::insert($stu);
        //     user::create([
        //         'name'=> $stu->name,
        //         'email' => $stu->email,
        //         'roll' => $stu->roll
        //     ]);
        // });
        // // user::create([
        // //     'name' => 'shafikul',
        // //     'email' => 'shafikul@gmail.com',
        // //     'roll' => 3
        // // ]);

        // 👉 fake conseft
        for ($i = 0; $i < 50; $i++) {
            user::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'roll' => fake()->randomNumber(4, true)
            ]);
        }
    }
}
