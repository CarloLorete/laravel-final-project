<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        $employees = Employee::paginate(10);
        return view('employees.index', compact('employees'));
    }
    

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
            
        ]);
        
        //Student::create($request->post());
        Employee::create([
            'name' => $request->name,
            'date' => $request->date,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
            
        ]);

        return redirect()->route('employees.index')->with('success','Employee Added Successfully.');
    }

   
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    
    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
           'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
        ]);
        
        //$student->fill($request->post())->save();

        $employee->fill([
            'name' => $request->name,
            'date' => $request->date,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
        ])->save();

        return redirect()->route('employees.index')->with('success','Employee updated successfully');
    }

   
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success','Deleted Successfully');
    }
}
