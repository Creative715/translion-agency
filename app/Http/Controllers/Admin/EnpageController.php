<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enpage;
use Illuminate\Http\Request;

class EnpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $enpages = Enpage::latest()->get();
        return view('admin.enpage.index', [
            'enpages' => $enpages
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create()
    {

        return view('admin.enpage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enpage = Enpage::create($request->all());

        $enpage->save();

        return redirect('inside/enpage')->withSuccess('Сторінка успішно додана!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Enpage $enpage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Enpage $enpage)
    {
        return view('admin.enpage.edit', compact('enpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Enpage $enpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enpage $enpage)
    {

        $enpage->update($request->all());

        $enpage->save();

        return redirect('inside/enpage')->withSuccess('Сторінку успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Enpage $enpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enpage $enpage)
    {
        $enpage->delete();

        return redirect('inside/enpage')->withSuccess('Сторінку успішно видалено!');
    }
}
