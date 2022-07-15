<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
    	return view('department.departmentIndex');
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	dd($data);
    }
}
