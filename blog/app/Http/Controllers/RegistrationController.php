<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistraionForm;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function create(){
         return view('registration.create');
    }

    public function store(RegistraionForm $request){
        
//        $this->validate(request(),[
//            'name'=> 'required',
//            'email'=> 'required|email',
//            'password' => 'required|confirmed'
//        ]);

//        $user = User::create([
//            'name' => request('name'),
//            'email'=> request('email'),
//            'password'=> bcrypt(request('password'))
//        ]);
//
//        auth()->login($user);
//
//        Mail::to($user)->send(new Welcome);


        $request->persist();

        session()->flash('message','Thanks for signing up!');
        return redirect()->home();

   }
}
