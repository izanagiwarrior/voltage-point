<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class CreateUsersSeeder extends Seeder
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
               'nama_lengkap'=>'Admin Charge Point',
               'email'=>'admin@chargepoint.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1000-01-01 00:00:00',
               'nik'=>"1234567890",
               'no_handphone'=>"1234567890",
            ],
            [
               'nama_lengkap'=>'Muhammad Afif Rizqi',
               'email'=>'afif@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1000-01-01 00:00:00',
               'nik'=>"1234567890",
               'no_handphone'=>"1234567890",
            ],
            [
               'nama_lengkap'=>'Shafira Naftania',
               'email'=>'nafta@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1000-01-01 00:00:00',
               'nik'=>"1234567890",
               'no_handphone'=>"1234567890",
            ],
            [
               'nama_lengkap'=>'Shafira Fatimah Azzahra',
               'email'=>'shafira@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1000-01-01 00:00:00',
               'nik'=>"1234567890",
               'no_handphone'=>"1234567890",
            ],
            [
               'nama_lengkap'=>'Angga Gifery Mellyanto',
               'email'=>'angga@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1000-01-01 00:00:00',
               'nik'=>"1234567890",
               'no_handphone'=>"1234567890",
            ],
            [
               'nama_lengkap'=>'Fadhil Alreyhan Pahrevi',
               'email'=>'fadhil@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1000-01-01 00:00:00',
               'nik'=>"1234567890",
               'no_handphone'=>"1234567890",
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
