<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function orderToService()
    {
        return $this->hasMany(OrderToService::class);
    }

    public function laundrySepatu()
    {
        return $this->belongsTo(LaundrySepatu::class);
    }

    // public function getSelectedServices($orderId){
    //     return $this->select('id', 'serviceName')->where('')
    // }
    // public function getAllData()
    // {
    //     return $this->attributesToArray();
    // }
}
