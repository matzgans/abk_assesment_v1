<?php

namespace Database\Seeders;

use App\Models\Admin\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school = School::create([
            'name_school' => "SDN 1 Kabila",
            'headmaster' => "Rahmat Lahay",
            'email_school' => "sdn1kabil@gmail.com",
            'address' => fake()->address(),
        ]);

        User::create([
            'name' => $school->headmaster,
            'email' => strtolower(str_replace(' ', '.', trim($school))) . '@gmail.com',
            'password' => 'password',
            'role' => "headmaster",
            'remember_token' => Str::random(60),
        ]);
    }
}
