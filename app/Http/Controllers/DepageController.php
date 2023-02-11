<?php

namespace App\Http\Controllers;

use App\Models\Depage;

class DepageController extends Controller
{
    public function more($slug)
    {
        $depages = Depage::findBySlug($slug);
        return view('app.pages.depage', compact('depages'));
    }
}
