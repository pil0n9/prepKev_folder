<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FirstController extends Controller

{
        public function dashboard()
        {
            $data = User::get();
            return view('dashboard',compact('data'));
            
        }
    
         public function index()
        {
            $data = User::get();
            return view('index',compact('data'));
        }
        public function register()
        {    
            return view('register');
        }
        public function store(Request $request)
    {
                $validator = validator::make($request->all(),[
                    'email'     =>  'required|email',
                    'nama'      =>  'required',
                    'password'  =>  'required',
                ]);

     if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

                $data['email']          = $request->email;
                $data['name']           = $request->nama;
                $data['password']       = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
     }   
}