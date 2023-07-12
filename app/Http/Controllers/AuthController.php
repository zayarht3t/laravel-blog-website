<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function create(){
        return view('auth.create');
    }

    public function store(){
    $form =  request()->validate([
        'name' => ['required','max:255','min:5',Rule::unique('users','name')],
        'email'=>['required','max:255','min:10','email',Rule::unique('users','email')],
        'password' => 'required|max:255|min:8|confirmed',
       ]); 
    
    $form['password'] = bcrypt($form['password']);
    $user = User::create($form);

    auth()->login();

    return redirect('/')->with('success','Welcome back!',$user->name);
    }

    public function login(){
        return view('auth.login');
    }

    public function storeLogin(){
        $formData = request()->validate([
            'email' => ['required','email',Rule::exists('users','email')],
            'password' => 'required|min:8|max:255',
        ],[
            'email.required'=> 'email is required',
            'password.required'=> 'password is required'

        ]);

       if(auth()->attempt($formData)){
        return redirect('/')->with('success', 'Welcome back');
       }else{
        return redirect()->back()->withErrors([
            "email"=> "user creaditionals wrong"
        ]);
       }
    }

    public function logout(){
        Auth::logout();
        return back()->with('success', 'Goodbye');
    }
   
}
