<?php

namespace App\Http\Controllers\admin\product;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\SubCategory;
use Dotenv\Result\Success;
use Illuminate\Contracts\Pagination\Paginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*   $product = Product::with(['category','subCategory'])->get(); */
      $product = Product::latest()->paginate('10');
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $product = Product::all();

        return view("admin.product.product",compact("product","categories","sub_categories","product"));
        //->with(['product' => $product,'categories' => $categories,'sub_categories' => $sub_categories]);


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'price' => 'required | numeric | min:0 ',
        ]);

        //$product = new Product();

        Product::create([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->subcategory_id
        ]);
        return redirect()->back()->with('message','success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'price' => 'required | numeric | min:0 ',
        ]);
        Product::where('id',$id)->update([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->subcategory_id
        ]);

        return redirect()->back()->with('message','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete('id');
        return redirect()->back()->with('message','Success');

    }
}
