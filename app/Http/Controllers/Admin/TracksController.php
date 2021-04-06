<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Track;

class TracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracks = Track::all();
        return view('admin.tracks.index', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validation rules
       $request->validate([
           'name'=> 'required',
           'avtor' => 'required',
           'img' => 'required|file|mimes:jpeg,jpg,png',
           'mp3' => 'required|file|mimes:mp3,m4a,wav,wma,aac'
       ]);
       // upload image to storage
       $img_name = $request->file('img')->store('tracks_img', ['disk'=>'public']);
       $full_path = storage_path('app/public/'.$img_name);

       //upload mp3 to storage

       $track_name = $request->file('mp3')->store('tracks', ['disk'=>'public']);
       $tracks_full_path = storage_path('app/public/'.$track_name);
        
       Track::create([
           'name' => $request->post('name'),
           'avtor' => $request->post('avtor'),
           'img' => $img_name,
           'mp3' => $track_name
       ]);

       return redirect()->to('admin.tracks')->with('success', 'Item created!');   
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
