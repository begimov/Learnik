<?php

namespace App\Http\Controllers\WebApi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCard;

class CardController extends Controller
{
    public function store(StoreCard $request)
    {
        return [$request->body, $request->snippet];
    }
}
