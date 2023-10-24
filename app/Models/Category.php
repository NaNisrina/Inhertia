<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $guarded = [
        'id'
    ];

    public function franchise(){
        return $this->hasMany(Franchise::class);
    }

    public function franchiseLimit(){
        return $this->hasMany(Franchise::class)->limit(4);
    }
}
