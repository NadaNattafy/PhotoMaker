<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\Redirect;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('admin.albums.index');
       $albums = Album::get();
       return view('admin.albums.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.albums.create');

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

       $album = Album::create($request->all());

       if ($request->has('picture')) {

        $album->update(['picture' => $request->file('picture')->store('albumPics')]);
       }

       return redirect()->route('admin.albums.index')->with('message','Album Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */
    /*
    public function show($id)
    {
        //
        $album = Album::find($id);
        return view('admin.albums.show',compact('album'));
    }
*/

public function show(Album $album)
    {
        return view('admin.albums.show',compact('album'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('admin.albums.edit',compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'nullable'
        ]);

        // dd($request->all());
        $album -> update($request->all());

        if ($request->has('picture')) {

         $album->update(['picture' => $request->file('picture')->store('albumPics')]);
        }

        return redirect()->route('admin.albums.index')->with('message','Album Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();

         return redirect()->route('admin.albums.index')
                         ->with('message','Album deleted successfully');
      }
}
