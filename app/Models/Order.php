<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderToService()
    {
        return $this->hasMany(OrderToService::class);
    }

    public function laundrySepatu()
    {
        return $this->belongsTo(LaundrySepatu::class);
    }
}
