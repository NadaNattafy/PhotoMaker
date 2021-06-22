<?php

namespace App\Http\Controllers\Admin;
use App\Models\Services;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class ServicesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //return view('admin.contact', ['services' => $services]);

          $services = Services::get();
       return view('admin.services.index',compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::all();

        return view('admin.services.create', compact('services'));
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
            "services"=>'array',
        ]);

        Services::create($request->all());

        return back()->with('message','Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Services::find($id);
        return view('admin.services.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Services::find($id);
        return view('admin.services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $services -> update($request->all());

        return redirect()->route('admin.services.index')->with('message','Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        $services->delete();

         return redirect()->route('admin.services.index')
                         ->with('message','Service deleted successfully');
      }
}
