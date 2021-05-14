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
                'saldo' => 0,
            ],
        ];

        foreach ($dompet as $key => $value) {
            Dompets::create($value);
        }
    }
}
