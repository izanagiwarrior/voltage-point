<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dompets;

class CreateDompetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dompet = [
            [
                'user_id' => 1,
                'saldo' => 999999,
            ],
            [
                'user_id' => 2,
                'saldo' => 100000,
            ],
            [
                'user_id' => 3,
                'saldo' => 100000,
            ],
            [
                'user_id' => 4,
                'saldo' => 100000,
            ],
            [
                'user_id' => 5,
                'saldo' => 100000,
            ],
            [
                'user_id' => 6,
                'saldo' => 100000,
            ],
            [
                'user_id' => 7,
                'saldo' => 0,
            ],
            [
                'user_id' => 8,
                'saldo' => 0,
            ],
            [
                'user_id' => 9,
                'saldo' => 0,
            ],
            [
                'user_id' => 10,
                'saldo' => 0,
            ],
            [
                'user_id' => 11,
                'saldo' => 0,
            ],
            [
                'user_id' => 12,
                'saldo' => 0,
            ],
            [
                'user_id' => 13,
                'saldo' => 0,
            ],
            [
                'user_id' => 14,
                'saldo' => 0,
            ],
            [
                'user_id' => 15,
                'saldo' => 0,
            ],
        ];

        foreach ($dompet as $key => $value) {
            Dompets::create($value);
        }
    }
}
