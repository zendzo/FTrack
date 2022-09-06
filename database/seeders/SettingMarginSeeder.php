<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingMarginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'margin' => 0.2,
            'user_id' => 1
        ]);

        $this->command->info('Input Setting Margin 20%');
    }
}
