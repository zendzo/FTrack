<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            'PCS' => 'Kemasan Per Pack',
            'Bh' => 'Buah',
            'Prs' => 'Porsi',
            'Bks' => 'Bungkus',
            'Btr' => 'Butir',
            'Gls' => 'Gelas',
            'Cup' => 'Per Cup'
        ];

        foreach ($units as $key => $unit) {
            Unit::create([
                'name' => $unit,
                'symbol' => $key
            ]);

        }

        $this->command->info("Create Daftar Satuan!");
    }
}
