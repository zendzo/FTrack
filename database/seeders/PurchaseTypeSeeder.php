<?php

namespace Database\Seeders;

use App\Models\PurchasesType;
use Illuminate\Database\Seeder;

class PurchaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchases = [
            'Cash',
            'Transfer'
        ];

        foreach ($purchases as $purchase) {
            PurchasesType::create([
                'name' => $purchase,
                'description' => $purchase
            ]);
        }

        $this->command->info('Created Jenis Pembayaran!');
    }
}
