<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminRegister;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        AdminRegister::create([
            'adminName' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
    }
}
