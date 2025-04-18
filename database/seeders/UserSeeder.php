<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Dr. Avrilyan',
            'alamat' => 'Kalibanteng 02',
            'no_hp' => '085725377780',
            'email' => 'dokter@gmail.com',
            'role' => 'dokter',
            'password' => hash::make('password')
        ]);

        User::create([
            'nama' => 'Dr. Avrilyan',
            'alamat' => 'Kalibanteng 02',
            'no_hp' => '085725377708',
            'email' => 'pasien@gmail.com',
            'role' => 'dokter',
            'password' => hash::make('password')
        ]);
    }
}
