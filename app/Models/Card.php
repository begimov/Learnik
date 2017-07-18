<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
