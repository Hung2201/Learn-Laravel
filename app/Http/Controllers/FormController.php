<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FormController extends Controller

{
    public function index(){
        return view('form');
    }
    public function post(Request $request){
        dd($request->all());
    }
}
