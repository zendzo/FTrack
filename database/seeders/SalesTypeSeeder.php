<?php

namespace Database\Seeders;

use App\Models\SalesType;
use Illuminate\Database\Seeder;

class SalesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salesType = [
            'Cash',
            'Transfer'
        ];

        foreach ($salesType as $type) {
            SalesType::create([
                'name'=> $type,
                'description' => $type
            ]);
        }

        $this->command->info("Create Jenis Pembayaran!");
    }
}
