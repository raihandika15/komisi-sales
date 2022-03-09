<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'raihan@admin.com',
                'role' => '0',
                'password' => bcrypt('raihan123'),
            ],
            [
                'name' => 'User',
                'email' => 'raihan@user.com',
                'role' => '1',
                'password' => bcrypt('raihan123'),
            ]
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
