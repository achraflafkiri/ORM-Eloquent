<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    
    
    public function create()
    {
        return view('products.create');
    }

   
    public function store(ProductRequest $request)
    {
        // Validation passed, you can access validated data using the $request object
        $validatedData = $request->validated();
        
        // Create a new product using the validated data
        $product = new Product([
            "designation" => $validatedData['designation'],
            "prix" => $validatedData['prix'],
            "qte_stock" => $validatedData['qte_stock']
        ]);
        
        // Save the product to the database
        $product->save();
        
        // Redirect or perform any additional actions
        return redirect()->route('products.index');
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    
    public function edit(product $product, $id)
    {
        $product  = Product::find($id);
        return view('products.edit', compact('product'));
    }

   
    public function update(ProductRequest $request, $id)
    {
        $product = Product::where('id_prd', $id)->get()->first();
        $product->update([
            'designation' => request('designation'),
            'prix' => request('prix'),
            'qte_stock' => request('qte_stock')
        ]);
        return redirect(route('products.index'));
    }
    
    public function destroy($id)
    {
        $product = Product::where('id_prd', $id)->first();
        $product->delete();
        return redirect(route('products.index'));
    }

}
