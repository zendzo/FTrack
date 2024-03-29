<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchasesType;
use App\Models\Sale;
use App\Models\SalesType;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserAdminSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(PurchaseTypeSeeder::class);
        $this->call(SalesTypeSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        Sale::factory()->saleDate(date('Y-m-d'))->count(10)->create();
        $this->call(SettingMarginSeeder::class);
    }
}
