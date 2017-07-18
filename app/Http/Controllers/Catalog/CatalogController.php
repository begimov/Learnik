<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index');
    }
}
