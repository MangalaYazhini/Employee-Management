<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee; // if you rename model to Student, update this import accordingly

class employeecontroller extends Controller
{
    public function index()
    {
        return view('employee-reg');
    }

    public function addemployeedetails(Request $req)
    {
        // validate input
        $validated = $req->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'password'       => 'required|string|max:20',
            
            
            // 'parttime' can be omitted from form; we'll set default below
        ]);

        
        // create student
        employee::create($validated);

        return redirect()->back()->with('success', 'Employee added.');
    }
}
