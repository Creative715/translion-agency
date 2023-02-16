<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Depage;
use App\Models\Doctor;
use App\Models\Enpage;
use App\Models\News;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\Uapage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $uapages_count = Uapage::all()->count();
        $enpages_count = Enpage::all()->count();
        $depages_count = Depage::all()->count();
        $articles_count = Article::all()->count();


        return view('admin.home.index', [
            'uapages_count' => $uapages_count,
            'enpages_count' => $enpages_count,
            'depages_count' => $depages_count,
            'articles_count' => $articles_count
        ]);
    }
}
