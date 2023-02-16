<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Uapage;
use Illuminate\Http\Request;

class UapageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $uapages = Uapage::latest()->get();
        return view('admin.uapage.index', [
            'uapages' => $uapages
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create()
    {

        return view('admin.uapage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uapage = Uapage::create($request->all());

        $uapage->save();

        return redirect('inside/uapage')->withSuccess('Сторінка успішно додана!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $uapage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Uapage $uapage)
    {
        return view('admin.uapage.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $uapage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uapage $uapage)
    {

        $uapage->update($request->all());

        $uapage->save();

        return redirect('inside/uapage')->withSuccess('Сторінку успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $uapage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uapage $uapage)
    {
        $uapage->delete();

        return redirect('inside/uapage')->withSuccess('Сторінку успішно видалено!');
    }
}
