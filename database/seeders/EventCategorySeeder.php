<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_categories')->insert([
            ['name' => 'Expo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Concert', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Conference', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
