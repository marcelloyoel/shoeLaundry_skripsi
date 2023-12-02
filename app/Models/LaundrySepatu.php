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
}
