<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_role_id' => 1,
            'first_name' => "Clean Smart",
            'last_name' => "Admin",
            'full_name' => "Clean Smart Admin",
            'email' => 'info@cleansmart.com',
            'status' => 1,
            'password' => Hash::make('123456'),
        ]);
    }
}
