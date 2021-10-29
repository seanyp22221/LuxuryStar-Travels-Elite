<?php

namespace App\Http\Controllers\Proximity\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Prøxïmïtÿ.Auth.register');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
