<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    //Middleware
    public function __construct()
    {
        $this->middleware('ValidUser');
    }

    //New Product Create
    public function productCreate()
    {
        $ctg = Category::latest()->get();
        //dd($ctg);
        return view('pages.productCreate')->with('ctg', $ctg);
    }

    public function productCreateSubmitted(Request $request)
    {
        //return $request;
        $validate = $request->validate(
            [
                'p_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            []
        );

        $id = session()->get('user');
        // $ct = Category::where('id', $request->ct_id)->first();

        $product = new Product();
        $product->user_id = $id;
        $product->p_name = $request->p_name;
        $product->p_category = $request->p_category;
        $product->p_description = $request->p_description;
        $product->p_price = $request->p_price;
        $imageName = time() . "_" . $request->file('p_image')->getClientOriginalName();
        $request->p_image->move(public_path('images'), $imageName);
        $product->p_image = $imageName;
        $product->save();

        return redirect(route('productList'));
    }

    public function productList()
    {
        $id = session()->get('user');
        $products = Product::where('user_id', $id)->get();
        return view('pages.productList')->with('products', $products);
    }
}