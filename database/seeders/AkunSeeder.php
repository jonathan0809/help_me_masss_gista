<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
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
                'username' => 'Ratna Pigura 01',
                'name' => 'Ratna Pigura',
                'email' => 'ratna@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('12345')
            ],
            [
                'username' => 'Yeni Pigura 02',
                'name' => 'Yeni Pigura',
                'email' => 'yeni@gmail.com',
                'level' => 'kasir',
                'password' => bcrypt('12345')
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
