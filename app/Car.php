<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed brand
 * @property mixed body_type
 * @property mixed engine
 * @property mixed transmission
 * @property mixed production_year
 * @property mixed make_now
 * @property mixed workshop_id
 */
class Car extends Model
{
    protected $fillable = [
        'brand',
        'body_type',
        'engine',
        'color',
        'transmission',
        'production_year',
        'make_now',
        'workshop_id'
    ];

    protected $primaryKey = 'car_id';

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function workshop()
    {
        return $this->hasOne(Workshop::class);
    }

    public function create(array $fields)
    {
        $car = new static;
        $car->fill($fields);
        $car->save();

        return $car;
    }
}
