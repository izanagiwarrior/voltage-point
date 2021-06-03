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
               'tanggal_lahir'=>'2001-04-06 00:00:00',
               'nik'=>"8831744316",
               'no_handphone'=>"087283759181",
            ],
            [
               'nama_lengkap'=>'Muhammad Afif Rizqi',
               'email'=>'afif@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'2000-05-12 00:00:00',
               'nik'=>"2498374653",
               'no_handphone'=>"082422506262",
            ],
            [
               'nama_lengkap'=>'Shafira Naftania',
               'email'=>'nafta@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1999-12-04 00:00:00',
               'nik'=>"7050135457",
               'no_handphone'=>"089113820106",
            ],
            [
               'nama_lengkap'=>'Shafira Fatimah Azzahra',
               'email'=>'shafira@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1999-02-02 00:00:00',
               'nik'=>"7282270881",
               'no_handphone'=>"081855161151",
            ],
            [
               'nama_lengkap'=>'Angga Gifery Mellyanto',
               'email'=>'angga@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'1998-04-03 00:00:00',
               'nik'=>"6427602689",
               'no_handphone'=>"086316025731",
            ],
            [
               'nama_lengkap'=>'Fadhil Alreyhan Pahrevi',
               'email'=>'fadhil@chargepoint.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'tanggal_lahir'=>'2000-08-09 00:00:00',
               'nik'=>"4298291940",
               'no_handphone'=>"083827189122",
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
