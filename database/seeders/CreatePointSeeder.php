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
                'lat' => -6.568981250937421,
                'lang' => 106.76639412675327,
            ],
            [
                'location' => 'SPBU Pertamina 34-40261',
                'lat' => -6.97108784506026,
                'lang' => 107.63632388444098,
            ],
        ];

        foreach ($point as $key => $value) {
            Point::create($value);
        }
    }
}
