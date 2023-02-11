<?php

namespace App\Http\Controllers;

use App\Models\Enpage;

class EnpageController extends Controller
{
    public function more($slug)
    {
        $enpages = Enpage::findBySlug($slug);
        return view('app.pages.enpage', compact('enpages'));
    }
}
