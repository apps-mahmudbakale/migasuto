<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create(
                [
                'name' => 'Admin John',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
            ]
        );
    }
}
