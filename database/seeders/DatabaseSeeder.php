<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Question;
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
        // factory(User::class, 3)->create()->each(function($u)
        // {
        //     $u->questions()
        //       ->saveMany(
        //           factory(Question::class, rand(1,5))->make()
        //       );
        // });

        User::factory()->count(3)->create()->each(function($u)
        {
            $u->questions()
              ->saveMany(
                  Question::factory()->count(rand(1,5))->make()
              );
        });
    }
}
