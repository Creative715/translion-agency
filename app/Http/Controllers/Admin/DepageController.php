<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Depage;
use Illuminate\Http\Request;

class DepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $depages = Depage::latest()->get();
        return view('admin.depage.index', [
            'depages' => $depages
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create()
    {

        return view('admin.depage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depage = Depage::create($request->all());

        $depage->save();

        return redirect('inside/depage')->withSuccess('Сторінка успішно додана!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Depage $depage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Depage $depage)
    {
        return view('admin.depage.edit', compact('depage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Depage $depage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depage $depage)
    {

        $depage->update($request->all());

        $depage->save();

        return redirect('inside/depage')->withSuccess('Сторінку успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Depage $depage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depage $depage)
    {
        $depage->delete();

        return redirect('inside/depage')->withSuccess('Сторінку успішно видалено!');
    }
}
