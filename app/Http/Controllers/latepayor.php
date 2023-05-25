<?php

namespace App\Http\Controllers;
use App\Models\latepayormodel;
use Illuminate\Http\Request;

class latepayor extends Controller
{
   public function index2()
    {
        $debtors = latepayormodel::orderBy('id','desc')->paginate(5);
        return view('debtors.index2', compact('debtors'));
    }

    public function create2()
    {
        return view('debtors.create2');
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
        latepayormodel::create2([
            'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
        ]);

        return redirect()->route('debtors.index2')->with('success','Employee Added Successfully.');
    }

   
    public function show(latepayormodel $latepayor)
    {
        return view('debtors.show',compact('latepayor'));
    }

    
    public function edit2(latepayormodel $latepayor)
    {
        return view('debtors.edit2',compact('latepayor'));
    }

    
    public function update(Request $request, latepayormodel $latepayor)
    {
        $request->validate([
           'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
        ]);
        
        //$student->fill($request->post())->save();

        $latepayor->fill([
            'name' => $request->name,
            'date' => $request->date,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
            
        ])->save();

        return redirect()->route('debtors.index2')->with('success','Employee updated successfully');
    }

   
    public function destroy(latepayormodel $latepayor)
    {
        $latepayor->delete();
        return redirect()->route('debtors.index2')->with('success','Deleted Successfully');
    }
}
