<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organizers')->insert([
            ['name' => 'Southern Sydney University', 'description' => 'Description', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MSW Global', 'description' => 'Description', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Debindo', 'description' => 'Description', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
