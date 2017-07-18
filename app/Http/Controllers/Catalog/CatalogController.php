<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Collection;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index');
    }
}
