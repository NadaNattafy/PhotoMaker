<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = Setting::get();
        return view('admin.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $settings=Setting::all();

        return view('admin.settings.create', compact('settings'));
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
            'value' => 'required',
            'type' => 'required'

        ]);

        $settings= Setting::create($request->all());

       return redirect()->route('admin.setting.index')->with('message','Setting Created');

 }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
        return view('admin.settings.show',compact('settings'));
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
        return view('admin.settings.edit',compact('setting'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
        $request->validate([
           //  'name' => 'required',
            'value' => 'required',
          //  'type' => 'required'
        ]);

    $setting -> update($request->all());

    if ($request->hasFile('value')) {

     $setting->update(['picture' => $request->file('picture')->store('photoPics')]);
    }

    return redirect()->route('admin.setting.index')->with('message', 'Setting Updated Successfully');

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
        $setting->delete();

         return redirect()->route('admin.setting.index')
                         ->with('message','Settingdeleted successfully');
    }
}
