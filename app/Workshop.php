<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public function testLabs()
    {
        return $this->belongsTomany(
            TestLabs::class,
            'workshop_testlabs',
            'testlab_id',
            'workshop_id'
        );
    }
}
