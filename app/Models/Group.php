<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function userGroup()
    // {
    //     return $this->hasOne(UserGroup::class);
    // }

    public function groupMenu()
    {
        return $this->hasMany(GroupMenu::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
