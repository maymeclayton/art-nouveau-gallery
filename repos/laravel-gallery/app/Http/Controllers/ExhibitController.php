<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibits = \App\Exhibit::get();
        return view('welcome', compact('exhibits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exhibits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = new \App\Exhibit;
        $e->piece_name=$request->input('piece_name');
        $e->year=$request->input('year');
        $e->artist_name=$request->input('artist_name');
        $e->url=$request->input('url');
        $e->description=$request->input('description');
        $e->save();

        return redirect()->route('exhibits.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/exhibits');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $e=\App\Exhibit::find($id);


        return view('exhibits.edit', compact('e'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $e=\App\Exhibit::find($id);

        $e->piece_name=$request->input('new_piece_name');
        $e->year=$request->input('new_year');
        $e->artist_name=$request->input('new_artist_name');
        $e->url=$request->input('new_url');
        $e->description=$request->input('new_description');
        $e->save();

        return redirect('/exhibits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $e=\App\Exhibit::find($id);
        $e->delete();

        return redirect()->route('exhibits.index');
    }
}
