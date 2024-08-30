<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        $admin = User::create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin123',
            'password' => Hash::make('12345678'),
            'type' => 'admin',

        ]);
    }
}
