<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
        public function index(){

            $data = User::get(); 
            return view('index', compact('data'));
        }
}