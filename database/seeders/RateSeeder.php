<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRate();
    }

    public function createRate(){
        $rates = [
            ['rates' => '500', 'package_id' => 1],
            ['rates' => '600', 'package_id' => 1],
            ['rates' => '700', 'package_id' => 1],
            ['rates' => '400', 'package_id' => 1],
        ];

        foreach ($rates as $rate) {
            Rate::create([
                'rates' => $rate['rates'],
                'package_id' => $rate['package_id'],
            ]);
        };
    }
}
