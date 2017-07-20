<?php

namespace App\Http\Controllers\WebApi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function store(Request $request)
    {
        return [$request->body, $request->snippet];
    }
}
