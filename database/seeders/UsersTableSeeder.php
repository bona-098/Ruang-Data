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
            [
                'name' => 'OMS Balikpapan',
                'email' => 'area_balikpapan@oms.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'PSD Balikpapan',
                'email' => 'area_balikpapan@psd.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marshal Balikpapan',
                'email' => 'area_balikpapan@marshal.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'BSRM Balikpapan',
                'email' => 'area_balikpapan@bsrm.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],[
                'name' => 'OMS Kaltim',
                'email' => 'area_kaltim@oms.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'PSD Balikpapan',
                'email' => 'area_kaltim@psd.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marshal Kaltim',
                'email' => 'area_kaltim@marshal.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'BSRM Kaltim',
                'email' => 'area_kaltim@bsrm.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'OMS Kalsel',
                'email' => 'area_kalsel@oms.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'PSD Kalsel',
                'email' => 'area_kalsel@psd.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marshal Kalsel',
                'email' => 'area_kalsel@marshal.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'BSRM Kalsel',
                'email' => 'area_kalsel@bsrm.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'OMS Kalbar',
                'email' => 'area_kalbar@oms.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'PSD Kalbar',
                'email' => 'area_kalbar@psd.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'Marshal Kalbar',
                'email' => 'area_kalbar@marshal.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
            [
                'name' => 'BSRM Kalbar',
                'email' => 'area_kalbar@bsrm.com',
                'password' => Hash::make('password'),
                'role' => 'viewer',
            ],
        ];

        DB::table('users')->insert($users);
    }
}