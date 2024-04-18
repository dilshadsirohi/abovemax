<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cmp = Company::paginate(10);
        return view('comp.index',compact('cmp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        $validatedData = $request->validate([
            
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048|dimensions:min_width=100,min_height=100', 
        ]);
    
      
        if ($request->hasFile('logo')) {
            if ($request->file('logo')->isValid()) {
                $image = $request->file('logo')->store('public');
               
            } 
        } 
      Company::create($request->all());

    //   $cmp = Company::all();


      return redirect()->route('company.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('comp.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
        return redirect()->route('company.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //$company    = company::find($company);
        $company->delete();
        return redirect()->route('company.index'); 

    }
}
