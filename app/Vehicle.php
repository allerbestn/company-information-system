<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function bus()
    {
        return $this->hasMany(Bus::class);
    }

    public function lorry()
    {
        return $this->hasMany(Lorry::class);
    }

    public function motorcycles()
    {
        return $this->hasMany(Motorcycle::class);
    }
}