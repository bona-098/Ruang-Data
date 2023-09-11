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
                'name' => 'BSRM Regional',
                'email' => 'bsrm@telpror6.com',
                'password' => Hash::make('Admin123!'),
                'role' => 'bsrm',
            ],
            [
                'name' => 'Project solution Regional',
                'email' => 'projectsolution@telpror6.com',
                'password' => Hash::make('Admin123!'),
                'role' => 'project',
            ],
            [
                'name' => 'Marsal Regional',
                'email' => 'marsal@telpror6.com',
                'password' => Hash::make('Admin123!'),
                'role' => 'marshal',
            ],
            [
                'name' => 'OMS Regional',
                'email' => 'oms@telpror6.com',
                'password' => Hash::make('Admin123!'),
                'role' => 'oms',
            ],
            [
                'name' => 'viewer',
                'email' => 'viewer@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'OMS Balikpapan',
                'email' => 'oms_balikpapan@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Project solution Balikpapan',
                'email' => 'projectsolution_balikpapan@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marsal Balikpapan',
                'email' => 'marsal_balikpapan@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'marshal',
            ],
            [
                'name' => 'BSRM Balikpapan',
                'email' => 'bsrm_balikpapan@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],[
                'name' => 'OMS Kaltim',
                'email' => 'oms_kaltim@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Project solution Kaltim',
                'email' => 'projectsolution_kaltim@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marsal Kaltim',
                'email' => 'marsal_kaltim@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'marshal',
            ],
            [
                'name' => 'BSRM Kaltim',
                'email' => 'bsrm_kaltim@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'OMS Kalsel',
                'email' => 'oms_kalsel@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Project solution Kalsel',
                'email' => 'projectsolution_kalsel@telpror6.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marsal Kalsel',
                'email' => 'marsal_kalsel@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'marshal',
            ],
            [
                'name' => 'BSRM Kalsel',
                'email' => 'bsrm_kalsel@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'OMS Kalbar',
                'email' => 'oms_kalbar@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Project solution Kalbar',
                'email' => 'projectsolution_kalbar@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marsal Kalbar',
                'email' => 'marsal_kalbar@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'marshal',
            ],
            [
                'name' => 'BSRM Kalbar',
                'email' => 'bsrm_kalbar@telpror6.com',
                'password' => Hash::make('telpror6'),
                'role' => 'viewer',
            ],
        ];

        DB::table('users')->insert($users);
    }
}