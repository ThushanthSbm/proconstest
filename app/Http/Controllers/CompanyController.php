<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
        //
        $companies= Company::all();
        $companies= Company::where([
            ['name' ,'!=',Null]
        ])
        ->orderBy("id","ASC")
        ->paginate(10);
        return view('company/index' ,compact('companies'))->with('i',(request()->input('page',1) - 1)*10);;
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
     $validatedData = $request->validate([
            'name' => ['required' ,'min:5'],
            'mail' => ['required ','min:5'],
            'website' => ['required '],
            
           
            ]);

           
        
            $image=$request->file('logo');
            $imageName=time().','.$image->extension();
            $image->move(public_path('/img'),$imageName);
           
  
            $companies = new Company;           
            $companies->name = $request->name;
            $companies->mail = $request->mail;
            $companies->logo = $imageName;
            $companies->website = $request->website;
      


        $companies->save();
        return redirect('companies') ->with('status','Company Save Successfully!');;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        Company::find($company);
        return view('company/show' ,compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        Company::find($company);
        return view('company/edit' ,compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        Company::find($company);
        $company->name = $request->name;
        $company->mail = $request->mail;
        $company->website =$request->website;
        


        $company->save();
        return redirect('companies') ->with('status','Company Update Successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        Company::find($company);
    $company->delete();
    return redirect('companies') ->with('status','Company Delete Successfully!');;
    }
}
