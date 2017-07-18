<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function collection()
    {
        $this->belongsTo(Collection::class);
    }
}
