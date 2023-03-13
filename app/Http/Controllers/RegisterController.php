<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $register =new User();
     
        $register->first_name =$request->first_name;
        $register->last_name =$request->last_name;
        $register->email =$request->email;
        $register->user_type =$request->user_type;
        $register->password =Hash::make($request->password);
        $register->save();
        return redirect('/doctor');
    }
    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->user_type == 'admin') {
                return redirect('/super_admin');
            }else if (auth()->user()->user_type == 'doctor') {
                return redirect('/doctor');
            }else{
                return redirect('/patient');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
