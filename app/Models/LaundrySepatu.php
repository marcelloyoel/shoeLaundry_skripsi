<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaundrySepatu extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'laundrySepatuName'
            ]
        ];
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function getThisService($id)
    {
        $services = DB::table('services')
            ->select('serviceName', 'id')
            ->where('laundrySepatu_id', '=', $id)
            ->get();
        return $services;
    }

    public function getDoneOrder($idLaundry)
    {
        $count = DB::table('orders')
            ->where('laundry_sepatu_id', $idLaundry)
            ->where('status', 8)
            ->count();

        return $count;
    }
    public function getActiveOrder($idLaundry)
    {
        $count = DB::table('orders')
            ->where('laundry_sepatu_id', $idLaundry)
            ->where('status', 2)
            ->count();

        return $count;
    }
    public function getCancelledOrder($idLaundry)
    {
        $count = DB::table('orders')
            ->where('laundry_sepatu_id', $idLaundry)
            ->where('status', 9)
            ->count();

        return $count;
    }

    public function getTotalUang($idLaundry)
    {
        $result = DB::table('orders')
            ->where('laundry_sepatu_id', $idLaundry)
            ->where('status', 8)
            ->get()
            ->toArray(); // Get the result as an array
        // dd($result);
        $count = count($result);
        $money = 0;
        for ($i = 0; $i < $count; $i++) {
            $money = $money + $result[$i]->harga;
        }
        return $money;
    }
}
