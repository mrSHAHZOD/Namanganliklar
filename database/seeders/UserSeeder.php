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
     *
     * @return void
     */
    public function run():vold
    {
      /*   Role::create([
            'name' => 'superadmin',
        ]); */

        $user = User::create([
            'name' => 'shahzod',
            'email' => 'admin1@gmail.com',
            'password' =>Hash::make('admin123'),
        ]);
        $user->assignRole([1]);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin12@gmail.com',
            'password' =>Hash::make('admin123'),
        ]);
        $user->assignRole([2]);

        $user = User::create([
            'name' => 'Admin writer',
            'email' => 'admin123@gmail.com',
            'password' =>Hash::make('admin123'),
        ]);
        $user->assignRole([3]);

    }
}
