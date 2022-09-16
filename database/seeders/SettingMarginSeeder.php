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
        $margins = [
            [
                'margin' => 10,
                'description' => 'Margin 1-5 KM',
                'default' => false,
                'user_id' => 1
            ],
            [
                'margin' => 20,
                'description' => 'Margin 5-10 KM',
                'default' => true,
                'user_id' => 1
            ],
        ];

        foreach ($margins as $key => $margin) {
            Setting::create($margin);
        }
        $this->command->info('Input Data Margin');
    }
}
