<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'code',
        'purchase_type_id',
        'purchase_date',
        'sent_date',
        'address',
        'recipient',
        'paid_amount',
        'completed',
        'confirmed_by_admin',
        'setting_id'
    ];

    protected $casts = [
        'purchase_date' => 'datetime',
        'sent_date' => 'datetime'
    ];

    public function type()
    {
        return $this->belongsTo(PurchasesType::class,'purchase_type_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'recipient');
    }

    public function purchaseType()
    {
        return $this->belongsTo(PurchasesType::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_purchase')->withPivot(['id','quantity','grand_total','delivery_fee']);
    }

    public function margin()
    {
        return $this->belongsTo(Setting::class,'setting_id');
    }
}
