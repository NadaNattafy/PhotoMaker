<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyService;
use App\Models\Services;
use Illuminate\Http\Request;

class CompanyServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyservices = CompanyService::get();
        //dd($companyservices);
        return view('website.companyservice.index',compact('companyservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::all();
        $companies=Company::all();

        return view('website.contact',compact('companies','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'services_id' => 'required',
            'company_id' => 'required',
            'services' => 'array'
        ]);

        CompanyService::create($request->all());

        return back()->with('message','Company Service created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyService $companyservices)
    {
        //
        return view('website.companyservice.show',compact('companyservices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyService $companyservices)
    {
        //
        return view('website.companyservice.edit',compact('companyservices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyService $companyservices)
    {
        //
        $request->validate([
            'services_id' => 'required',
            'company_id' => 'required',
        ]);

        $companyservices -> update($request->all());

        return redirect()->route('website.companyservice.show')->with('message','Company Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyService $companyservices)
    {
        //
        $companyservices->delete();

         return redirect()->route('website.companyservice.index')
                         ->with('message','Company Service deleted successfully');
    }
}
