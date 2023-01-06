<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees= Employee::all();
        $employees= Employee::where([
            ['name' ,'!=',Null]
        ])
        ->orderBy("id","ASC")
        ->paginate(10);
        return view('employee/index' ,compact('employees'))->with('i',(request()->input('page',1) - 1)*10);;
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee/create');
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
        $validatedData = $request->validate([
            'firstname' => ['required' ,'min:5'],
            'lastname' => ['required' ,'min:5'],
            'company_id' => ['required '],
            'email' => ['required '],
            'phone' => ['required '],
            
           
            ]);

    
           
  
            $employees = new Employee;           
            $employees->firstname = $request->firstname;
            $employees->lastname = $request->lastname;
            $employees->company_id = $request->company_id;
            $employees->email = $request->email;
            $employees->phone = $request->phone;


        $companies->save();
        return redirect('employees') ->with('status','Employees Save Successfully!');;
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
        Employee::find($employee);
        return view('employee/show' ,compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        Employee::find($employee);
        return view('employee/edit' ,compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
  

        Employee::find($employee);         
        $employees->firstname = $request->firstname;
        $employees->lastname = $request->lastname;
        $employees->company_id = $request->company_id;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
        


        $company->save();
        return redirect('employees') ->with('status','Employee Update Successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        Employee::find($employee);
    $employee->delete();
    return redirect('employees') ->with('status','Employee Delete Successfully!');;
    }
}
