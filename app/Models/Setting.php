<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['margin','user_id'];

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
