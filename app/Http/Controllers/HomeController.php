<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class HomeController extends Controller
{

    public function index()
    {

        return view('auth.change-password');
    }

    public function updatePassword(Request $request)
    {

        //dd($request->all());

         $request->validate([
             'current_password' => 'required',
             'password' => 'required|min:6|max:12|string|confirmed',
             'password_confirmation' => 'required',
        ]);

         $user = Auth::user();

         //dd($user);

         if(Hash::check($request->current_password, $user->password)){

            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('change.password')->with(['success' => true]);
         }else{
            return redirect()->route('change.password')->with(['error' => true]);
         }
    }
}
