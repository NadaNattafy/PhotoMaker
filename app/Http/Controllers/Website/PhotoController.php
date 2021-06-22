<?php

namespace App\Http\Controllers\Website;

use App\Models\Album;
use App\Models\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::get();
        return view('website.show',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'path' => 'required',

        ]);

       $photo = Photo::create($request->all());

       if ($request->has('picture')) {

        $photo->update(['picture' => $request->file('picture')->store('$photoPics')]);
       }

       return redirect()->route('website.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('website.show',compact('photo'));
        $photos = Photo::find($id);
        return view('website.photos.show',compact('photos'));
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
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'name' => 'required',
            'path' => 'required',
        ]);

        $photo -> update($request->all());

        if ($request->has('picture')) {

         $photo->update(['picture' => $request->file('picture')->store('photoPics')]);
        }

        return redirect()->route('website.show',$photo->id)->with('message','Photo Updated Successfully');
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
