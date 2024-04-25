<?php

Skuspace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $rules[
            'name' => 'required|min:5',
            'Sku' => 'required|min:3',
            'Price' => 'required|numeric',

        ];
        $validator =Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);

        }

    }
    public function edit(){
        
    }
    public function update(){
        
    }
    // this methood will show product delete
    public function destroy(){
        
    }
}
