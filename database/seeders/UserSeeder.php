<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Dinas Pendidikan',
            'email' => 'bonebol@dikbud.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
            'role' => 'admin',
        ]);
        $user->assignRole('admin');
        $user = User::create([
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
            'role' => 'teacher',
        ]);
        $user->assignRole('teacher');
    }
}
