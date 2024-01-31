<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
                [
                    'username' => 'admin',
                    'email' => 'HappyShopp@example.com',
                    'password' => bcrypt('HappyShopp'),
                    'is_admin' => true,
                ]
            ];
            
        User::insert($admin);

    }
}
