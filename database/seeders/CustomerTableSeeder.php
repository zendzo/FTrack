<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = [
            ['kel' => 'Tanjung Pinang Kota','kec'=>'Tanjung Pinang Kota','kota'=>'Tanjung Pinang'],
            ['kel' => 'Senggarang','kec'=>'Tanjung Pinang Kota','kota'=>'Tanjung Pinang'],
            ['kel' => 'Bukit Cermin','kec'=>'Tanjung Pinang Barat','kota'=>'Tanjung Pinang'],
            ['kel' => 'Kemboja','kec'=>'Tanjung Pinang Barat','kota'=>'Tanjung Pinang'],
            ['kel' => 'Tanjung Pinang Barat','kec'=>'Tanjung Pinang Barat','kota'=>'Tanjung Pinang'],
            ['kel' => 'Kampung Baru','kec'=>'Tanjung Pinang Barat','kota'=>'Tanjung Pinang'],
            ['kel' => 'Penyengat','kec'=>'Tanjung Pinang Kota','kota'=>'Tanjung Pinang'],
            ['kel' => 'Kampung Bugis','kec'=>'Tanjung Pinang Kota','kota'=>'Tanjung Pinang'],
            ['kel' => 'Tanjung Unggat','kec'=>'Bukit Bestari','kota'=>'Tanjung Pinang'],
            ['kel' => 'Tanjung Pinang Timur','kec'=>'Bukit Bestari','kota'=>'Tanjung Pinang'],
            ['kel' => 'Pinang Kencana','kec'=>'Tanjung Pinang Timur','kota'=>'Tanjung Pinang'],
            ['kel' => 'Kampung Bulang','kec'=>'Tanjung Pinang Timur','kota'=>'Tanjung Pinang'],
            ['kel' => 'Air Raja','kec'=>'Tanjung Pinang Timur','kota'=>'Tanjung Pinang'],
            ['kel' => 'Melayu Kota Piring','kec'=>'Tanjung Pinang Timur','kota'=>'Tanjung Pinang'],
            ['kel' => 'Tanjung Ayun Sakti','kec'=>'Bukit Bestari','kota'=>'Tanjung Pinang'],
            ['kel' => 'Sei Jang','kec'=>'Bukit Bestari','kota'=>'Tanjung Pinang'],
            ['kel' => 'Dompak','kec'=>'Bukit Bestari','kota'=>'Tanjung Pinang'],
            ['kel' => 'Batu IX (Sembilan)','kec'=>'Tanjung Pinang Timur','kota'=>'Tanjung Pinang'],
        ];

        $faker = Faker::create('id_ID');

        foreach ($address as $key => $add) {
            Customer::create([
                'name' => $faker->fullName,
                'address' => $add['kel'],
                'phone' => $faker->phoneNumber,
                'status' => true,
                'description' => $add['kel'].",".$add['kec'].",".$add['kota'],
            ]);
        }

        $this->command->info("created Customer Data");
    }
}
