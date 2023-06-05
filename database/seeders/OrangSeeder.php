<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\integer;

class OrangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orangs')->insert([
            'name' => Str::random(10),
            'age' => 1,
            'picture' =>  Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
