<?php

namespace App\Http\Controllers\WebApi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function show(Collection $collection)
    {
        $cards = $collection->cards;
        return $cards->toArray();
    }
}
