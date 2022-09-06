<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Purchase;
use App\Models\Customer;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::all();

        foreach ($customers as $customer) {
            Purchase::create([
                'supplier_id' => rand(1,15),
                'setting_id' => 1,
                'code' => Str::random(10),
                'purchase_type_id' => rand(1,2),
                'purchase_date' => Carbon::now(),
                'sent_date' => Carbon::now()->addDay(),
                'recipient' => $customer->id,
                'paid_amount' => null,
                'completed' => false,
                'confirmed_by_admin' => false,
                'address' => $customer->address
            ]);
        }

        $this->command->info("Create Purchase Data");
    }
}
