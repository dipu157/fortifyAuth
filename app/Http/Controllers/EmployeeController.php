<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function store(Request $request){

    	$file = $request->file('avatar');
    	$filename = time().'.'.$file->getClientOriginalExtension();
    	$file->storeAs('public/images', $filename);

    	$empData = [
    		'first_name' => $request->fname,
    		'last_name' => $request->lname,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'post' => $request->post,
    		'avatar' => $filename,
    	];

    	Employee::create($empData);
    	return response()->json([
    		'status' => 200
    	]);
    }

    public function fetchAll(){

        $emps = Employee::all();
        $output = '';
        if($emps->count() > 0){
            $output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>POST</th>
                    <th>Phone</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($emps as $emp) {
                $output .= '<tr>
                <td>'.$emp->id.'</td>
                <td><img src="storage/images/'.$emp->avatar.'" width="50" 
                class="img-thumbnail rounded-circle"></td>
                <td>'. $emp->first_name.' '.$emp->last_name. '</td>
                <td>'.$emp->email.'</td>
                <td>'.$emp->post.'</td>
                <td>'.$emp->phone.'</td>
                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        }else{
            echo '<h1 class="text-center text-secondary my-5">No Record Found in Database</h1>';
        }
    }

    public function edit(Request $request){

        $id = $request->id;
        $emp = Employee::find($id);
        return response()->json($emp);
    }


    // handle update an employee ajax request
    public function update(Request $request) {
        $fileName = '';
        $emp = Employee::find($request->emp_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->avatar) {
                Storage::delete('public/images/' . $emp->avatar);
            }
        } else {
            $fileName = $request->emp_avatar;
        }

        $empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post, 'avatar' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an employee ajax request
    public function delete(Request $request) {
        $id = $request->id;
        $emp = Employee::find($id);
        if (Storage::delete('public/images/' . $emp->avatar)) {
            Employee::destroy($id);
        }
    }
}
