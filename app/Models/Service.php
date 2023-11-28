<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'serviceName'
            ]
        ];
    }

    public function orderToService()
    {
        return $this->hasMany(OrderToService::class);
    }

    public function laundrySepatu()
    {
        return $this->belongsTo(LaundrySepatu::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // public function getSelectedServices($orderId){
    //     return $this->select('id', 'serviceName')->where('')
    // }
    // public function getAllData()
    // {
    //     return $this->attributesToArray();
    // }
}
