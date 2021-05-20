<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Point;

class CreatePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $point = [
            [
                'location' => 'SPBU cemplang',
                'alamat' => 'Jl. Brigjen Saptadji Hadiprawira, RT.01/RW.07, Cilendek Bar., Kec. Bogor Bar., Kota Bogor, Jawa Barat 16112',
                'lat' => -6.568981250937421,
                'lang' => 106.76639412675327,
            ],
            [
                'location' => 'SPBU Pertamina 34-40261',
                'alamat' => 'Jl. Raya Bojongsoang Raya No.261, Lengkong, Kec. Bojongsoang, Bandung, Jawa Barat 40287',
                'lat' => -6.97108784506026,
                'lang' => 107.63632388444098,
            ],
        ];

        foreach ($point as $key => $value) {
            Point::create($value);
        }
    }
}
