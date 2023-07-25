<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'BSRM Admin',
                'email' => 'admin@bsrm.com',
                'password' => Hash::make('password'),
                'role' => 'bsrm',
            ],
            [
                'name' => 'Project Admin',
                'email' => 'admin@project.com',
                'password' => Hash::make('password'),
                'role' => 'project',
            ],
            [
                'name' => 'Marshal Admin',
                'email' => 'admin@marshal.com',
                'password' => Hash::make('password'),
                'role' => 'marshal',
            ],
            [
                'name' => 'OMS Admin',
                'email' => 'admin@oms.com',
                'password' => Hash::make('password'),
                'role' => 'oms',
            ],
            [
                'name' => 'viewer',
                'email' => 'telpro@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
        ];

        DB::table('users')->insert($users);
    }
}