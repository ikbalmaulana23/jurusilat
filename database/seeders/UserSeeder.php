<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'juri1',
            'email' => 'juri1@gmail.com',
            'password' => 'silat123'

        ]);

        User::create([

            'name' => 'juri2',
            'email' => 'juri2@gmail.com',
            'password' => 'silat123'

        ]);

        User::create([

            'name' => 'juri3',
            'email' => 'juri3@gmail.com',
            'password' => 'silat123'

        ]);
        User::create([

            'name' => 'juri4',
            'email' => 'juri4@gmail.com',
            'password' => 'silat123'

        ]);
        User::create([

            'name' => 'juri5',
            'email' => 'juri5@gmail.com',
            'password' => 'silat123'

        ]);

        User::create([

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'

        ]);
    }
}
