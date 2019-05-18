<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function getRouteKeyName()
    {
        return 'name';
    }
}
