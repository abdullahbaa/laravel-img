<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
        // this Method will show product Index

    public function index(){

    }
        // this Method will show product Create

    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $rules=[
            'name' => 'required|min:5',
            'Sku' => 'required|min:3',
            'Price' => 'required|numeric',

        ];
        $validator =Validator::make($request ->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);

        }

    }
        // this Method will show product Edit

    public function edit(){
        
    }
        // this Method will show product Update

    public function update(){
        
    }
    // this Method will show product delete
    public function destroy(){
        
    }
}
