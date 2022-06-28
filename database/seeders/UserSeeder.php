<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'operator',
            'email' => 'operator@operator.com',
            'password' => bcrypt('123456'),
        ]);

        $user->assignRole('Operator');

        $user = User::create([
            'name' => 'Pimpinan',
            'email' => 'Pimpinan@Pimpinan.com',
            'password' => bcrypt('123456'),
        ]);

        $user->assignRole('Pimpinan');
    }
}
