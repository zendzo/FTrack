<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supplier_id' => rand(1,15),
            'code' => Str::random(10),
            'purchase_type_id' => rand(1,2),
            'purchase_date' => Carbon::now(),
            'sent_date' => Carbon::now()->addDay(),
            'recipient' => factory(App\User::class),
            'paid_amount' => null,
            'completed' => false,
            'confirmed_by_admin' => false,
            'address' => function(array $address){
                return App\Customer::find($address['recipient'])->address;
            },
        ];
    }

    public function purchaseDate($date)
    {
        return $this->state(function (array $attributes) use ($date) {
            return [
                'purchase_date' => Carbon::createFromFormat('Y-m-d', $date)->toDateString(),
            ];
        });
    }
    
}
