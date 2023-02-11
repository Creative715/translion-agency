<?php

namespace App\Http\Controllers;

use App\Models\Uapage;

class UapageController extends Controller
{
    public function more($slug)
    {
        $uapages = Uapage::findBySlug($slug);
        return view('app.pages.uapage', compact('uapages'));
    }
}
