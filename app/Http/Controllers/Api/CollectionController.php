<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Card;

class CollectionController extends Controller
{
    public function index(Collection $collection, $cardId)
    {
        $card = $collection->cards()->where('id', $cardId)->first();
        return $card->toArray();
    }
}
