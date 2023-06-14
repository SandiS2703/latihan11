<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'min:5|confirmed|required',
        ]);

        $input = $request->all();
        $password = bcrypt($request->input('password'));
        $input['password'] = "$password";

        User::create($input);
        return redirect('login');
    }
}
