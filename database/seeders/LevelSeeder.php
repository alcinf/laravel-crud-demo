<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = ['FIRST', 'SECOND', 'THIRD', 'FORTH', 'FIFTH', 'SIXTH'];

        foreach ($levels as $level) {
            DB::table('levels')->insert([
                'name' => $level
            ]);
        }
    }
}
