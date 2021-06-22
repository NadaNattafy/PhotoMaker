<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Menu;
use App\Models\Services;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::get();

        $services = Services::get();

        //dd($services);

        return view('website.company.index', compact('company', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
    $company = Company::get();

    $services = Services::get();

    return view('website.contact', compact('company', 'services'));
}

// public function create()
// {

//     return view('website.company.replay');
// }

// public function send()
// {
// request()->validate((['email' => 'required|email']));

//     return redirect()->back();
// }



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
            'category' => 'required',
            'mobile' =>  'required',
            'email' => 'required',
            'services' => 'array',
        ]);


        $company = Company::create($request->all());

        if ($request['services']) {
            //  sync attach deattach toggle syncWithoutDeattaching
            $company->services()->sync($request['services']);
        }

        return back()->with('message', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('website.company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        return view('website.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'mobile' =>  'required',
            'email' => 'required',
            'services' => 'array',
        ]);

        $company = Company::create($request->all());
        $company->update($request->all());

        return redirect()->route('website.company.show')->with('message', 'company Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();

         return redirect()->route('website.company.index')
                         ->with('message','Company deleted successfully');
    }
}

/*
// Detach a single role from the user...
$user->roles()->detach($roleId);

// Detach all roles from the user...
$user->roles()->detach();

//id for single
$user->reasons->attach($reasonId);

//array for multiple
$user->reasons->attach($reasonIds);

//syncWithoutDeattaching

will remove all existed relations except provided in current process, then the pre-existed rows won't get new ids

//sync()

will remove all existed relations and set only provided in current request, with fresh ids too.
*/
