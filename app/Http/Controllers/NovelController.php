<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novel;

class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novels = Novel::all();

        return view("novels.index", compact("novels"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("novels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $novel = new Novel();
        $novel->fill($data);
        $novel->save();
        

        return redirect()->route("novels.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Novel $novel)
    {
        return view("novels.show", compact("novel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novel  $novel
     * @return \Illuminate\Http\Response
     */
    public function edit(Novel $novel)
    {
        return view('novels.edit', compact("novel"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novel $novel)
    {
        $formData = $request->all();

        $novel->update($formData);

        return redirect()->route('novels.show', $novel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Novel  $novel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novel $novel)
    {
        $novel->delete();
        return redirect()->route('novels.index');
    }
}
