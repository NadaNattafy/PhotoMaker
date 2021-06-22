<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Photo;
use tidy;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos = Photo::get();
       return view('admin.photos.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $albums=Album::all();

        return view('admin.photos.create', compact('albums'));
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

            'title' => 'required',

            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

       $photo = Photo::create($request->all());

       if ($request->has('picture')) {

        $photo->update(['picture' => $request->file('picture')->store('photoPics')]);
       }

       return redirect()->route('admin.photos.index')->with('message','Photo Created');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('admin.photos.show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit',compact('photo'));
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
            'title' => 'required',
            'picture' => 'nullable'
        ]);

        // dd($request->all());
        $photo -> update($request->all());

        if ($request->has('picture')) {

         $photo->update(['picture' => $request->file('picture')->store('photoPics')]);
        }

        return redirect()->route('admin.photos.index')->with('message','Photo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();

         return redirect()->route('admin.photos.index')
                         ->with('message','Photo deleted successfully');
      }
}

