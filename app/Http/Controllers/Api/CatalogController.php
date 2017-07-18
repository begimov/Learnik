<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Collection;

class CatalogController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        return $collections->toArray();
    }
}
