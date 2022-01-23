<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([[
            'name' => 'kue',
            'email' => 'admin@treetoone.test',
            'password'=> bcrypt('123456')
        ],
        [
            'name' => 'nut',
            'email' => 'user@treetoone.test',
            'password'=> bcrypt('123456')
        ]
    
    ]);
    }
}
