<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Timetable;
use App\Models\TTElements;
use App\Models\Note;
use App\Models\Style;
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
        User::factory()->create([
            "name" => "test",
            "email" => "example@email.com",
            "password" => "topsecret"
        ]);
        User::factory(10)->create();
        Note::factory(50)->create();
        Timetable::factory(10)->create();
        TTElements::factory(30)->create();
        Style::factory(20)->create();
    }
}
