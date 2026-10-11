<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
            [
                'name' => 'Gramedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mizan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}