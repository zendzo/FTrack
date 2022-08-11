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
            'Pcs' => 'PCS',
            'Buah' => 'BUAH',
            'Porsi' => 'PORSI',
            'Bungkus' => 'BUNGKUS',
            'Butir' => 'BUTIR',
            'Gelas' => 'GELAS',
            'Cup' => 'CUP',
            'Lembar' => 'LEMBAR',
            'Keping' => 'KEPING',
            'Conc' => 'CONC',
            'Set' => 'SET',
            'Dos Kecil' => 'DOS KECIL',
            'Dos Sedang' => 'DOS SEDANG',
            'Dos Besar' => 'DOS BESAR',
            'Kotak' => 'KOTAK',
            'Rim' => 'RIM',
            'Rol' => 'ROL',
            'Dos' => 'DOS',
            'Batang' => 'BATANG',
            'Shet' => 'SHET',
            'Toner' => 'TONER',
            'Botol' => 'BOTOL',
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
