<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\category;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index',[ 

            'products' => product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [ 'required', 'string' ],
            'value' => [ 'required', 'integer' ],
            'description' => [ 'required', 'string' ]
        ]);

        $product= new product;
        $image='';
        if($request->file('productcover') !=null){
            $product->image = $this-> get_and_save_img($request->file('productcover'));
            
        }

                
        // product::create([

        //     'name' => $request->get('name'),
        //     'value' => $request->get('value'),
        //     'description' => $request->get('description'),
        //     'status' => $request->get('status'),
        //     'image' => $image,
        //     'category_id' => $request->get('category_id')
        //     ]);


        $product->name = $request->get('name');
        $product->value = $request->get('value');
        $product->description = $request->get('description');
        $product->status = $request->get('status');
        $product->category_id = $request->get('category_id');
        $product->save();

            return redirect('/product');
    } 

    public function get_and_save_img($productcover){
        $extension = $productcover->getClientOriginalExtension();
        Storage::disk('public')->put($productcover->getFilename().'.'. $extension,

        File::get($productcover));
        return  $productcover->getFilename() . '.' . $extension;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('products.show',[
        'product' => $product]
    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $category = category::all();
        return view('products.edit',[

            'product' => $product
        ], compact('category')
    
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'name' => [ 'required', 'string' ],
            'value' => [ 'required', 'integer' ],
            'description' => [ 'required', 'string' ]
        ]);
        
        if($request->file('productcover') !=null){
            $product->image = $this-> get_and_save_img($request->file('productcover'));
            
        }
        // $productcover = $request->file('productcover');
        // $extension = $productcover->getClientOriginalExtension();
        // Storage::disk('public')->put($productcover->getFilename().'.'. $extension,

        // File::get($productcover));
        // $product->image = $productcover->getFilename() . '.' . $extension;

       // dd($productcover->getFilename() . '.' . $extension);

        $product->name = $request->get('name');
        $product->value = $request->get('value');
        $product->description = $request->get('description');
        $product->status = $request->get('status');
        $product->category_id = $request->get('category_id');
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        // product::destroy($product->id);
        $product->delete(); 
        return redirect()->route('product.index');
    }


    //insercion controlador de listado

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listado()
    {
        return view('products.listado',[ 

            'products' => product::all()
        ]);
    }


}
