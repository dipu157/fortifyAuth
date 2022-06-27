<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function changePassword()
    {
        return view('auth.passwords.change-password');
    }

    public function updatePassword(Request $request)
    {
         $request->validate([
             'current_password' => 'required',
             'password' => 'required|min:6|max:12',
             'confirm_password' => 'required|min:6|max:12',
        ]);

         $user = Auth::user();

         if(Hash::check($request->current_password, $user->password)){

            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success','password change succesfully');
         }else{
            return redirect()->back()->with('error','current password not match');
         }
    }
}
