<?php

namespace App\Http\Controllers;

use App\Models\Main;


class MainController extends Controller
{
    public function index()
    {
        $mains = Main::all()->where('id', 1)->firstOrFail();
        return view('app.pages.uamain', compact('mains'));
    }

    public function en()
    {
        $mains = Main::all()->where('id', 2)->firstOrFail();
        return view('app.pages.enmain', compact('mains'));
    }

    public function de()
    {
        $mains = Main::all()->where('id', 3)->firstOrFail();
        return view('app.pages.demain', compact('mains'));
    }

}
