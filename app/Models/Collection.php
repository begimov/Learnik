<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function cards()
    {
        $this->hasMany(Card::class);
    }
}
