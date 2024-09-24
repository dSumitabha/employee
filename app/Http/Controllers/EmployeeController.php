<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Return a view and pass the employee data to it
        return view('index', compact('employees'));
    }
    public function edit()
    {
        $employee = Auth::user(); // Get the currently authenticated user
        return view('edit', compact('employee'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $employee = Auth::user(); // Get the currently authenticated user
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');

        if ($request->filled('password')) {
            $employee->password = bcrypt($request->input('password'));
        }

        $employee->save();

        return redirect()->route('employee.edit')->with('status', 'Profile updated successfully.');
    }
}
