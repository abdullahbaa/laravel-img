<?php


namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
        // this Method will show product Index

    public function index(){
        $products=product::orderBy('created_at','DESC')->get();
        return view('products.list',[
        'Products' =>$products
        ]);
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

        if($request->$image !=""){
            $rules['image'] ='image';

        }

        $validator =Validator::make($request ->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);

        }
        // here we will insert product in Database
        $products= new Product();
        $products->name =$request-> name;
        $products->Sku = $request->Sku;
        $products->Price = $request->Price;
        $products->Description = $requests->Description;
        $products-> save();


        // Execute the full codes.
        if($request->image != "")
        {
            // Here we will store Image

        $image=$request->image;
        $ext = $image->getClientOriginalExtension();
        // Unique image name
        $imageName= time().'.'.$ext; 

        // Save images to products directory
        $image->move(public_path('uploads/products'),$imageName);
        
        // save image name in database
        $product->image=$imageName;
        $product->save();
        }



        return redirect()->route('products.index') ->with('success','product added successfully.');

    }
        // this Method will show product Edit

    public function edit($id){
        $product = product::findOrFail($id);
        return view('products.edit',[
            'product' =>$product
        ]);
        
    }
        // this Method will show product Update

    public function update($id,Request $request){

        $product = product::findOrFail($id);

        $rules=[
            'name' => 'required|min:5',
            'Sku' => 'required|min:3',
            'Price' => 'required|numeric',

        ];

        if($request->$image !=""){
            $rules['image'] ='image';

        }

        $validator =Validator::make($request ->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.edit',$product->id)->withInput()->withErrors($validator);

        }
        // Here we will Update product
       
        $products->name =$request-> name;
        $products->Sku = $request->Sku;
        $products->Price = $request->Price;
        $products->Description = $requests->Description;
        $products-> save();


        // Execute the full codes.
        if($request->image != "")
        {
            // delete old image
            File::delete(public_path('uploads/products/'.$product->image));
            // Here we will store Image

        $image=$request->image;
        $ext = $image->getClientOriginalExtension();
        // Unique image name
        $imageName= time().'.'.$ext; 

        // Save images to products directory
        $image->move(public_path('uploads/products'),$imageName);
        
        // save image name in database
        $product->image=$imageName;
        $product->save();
        }



        return redirect()->route('products.index') ->with('success','product updated successfully.');
    }
    // This Method will show product delete
    public function destroy($id){
        $product = product::findOrFail($id);
        
        // delete image
        File::delete(public_path('uploads/products/'.$product->image));
        $product->delete();
        return redirect()->route('products.index') ->with('success','product deleted successfully.');

    }
}
