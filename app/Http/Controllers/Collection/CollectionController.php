<?php

namespace App\Http\Controllers\Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index(Collection $collection)
    {
        $collId = $collection->id;
        $cardId = $collection->cards()->first()->id;
        return view('collection.index', compact('collId', 'cardId'));
    }
}