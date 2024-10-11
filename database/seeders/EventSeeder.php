<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('events')->insert([
            [
                'title' => 'Indonesia Innovation Challenge 2024',
                'venue' => $faker->address,
                'date' => $faker->date,
                'start_time' => $faker->time,
                'description' => $faker->text,
                'booking_url' => $faker->url,
                'tags' => 'tag',
                'organizer_id' => 1,
                'event_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
