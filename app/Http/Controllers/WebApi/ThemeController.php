<?php

namespace App\Http\Controllers\WebApi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Theme;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        return $themes->toArray();
    }

    public function show(Theme $theme)
    {
        $collections = $theme->collections;
        return $collections->toArray();
    }
}
