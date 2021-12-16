<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{

    protected  $productRepo;

    public function __construct(ProductRepositoryInterface $model){
        $this->productRepo = $model;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return 'fdf';
        // $products = ProductResource::collection(Product::all());
        // $products = ProductResource::collection(Product::paginate(3));
        // return  $products ;
        $products = ProductResource::collection($this->productRepo->all());
        $products = ProductResource::collection(Product::paginate(10));
        // dd($products->resource);
        return view('cms.products.index')->with("products", $products);
    }
    public function test()
    {
        //
        return 'test';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        // return view('product.create', );
        $product = new Product();
        $product->name = $request->input('productName');
        $product->price = $request->input('productPrice');
        $product->description = $request->input('productDetail');
        $product->img = "";
        if($product->save()){
            $photo = $request->file('productPhoto');
            if($photo != null){
                $ext = $photo->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' . $ext;
                if($ext == 'jpg' || $ext == 'png'){
                    if($photo->move(public_path().'/img', $fileName)){
                        $product = Product::find($product->id);
                        // $product->photo = url('/') . '/' . $fileName;
                        $product->img =$fileName;
                        $product->save();
                    }
                }
            }
            return redirect()->back()->with('success', 'Product information updated successfully!');
        }
        return redirect()->back()->with('failed', 'Product information could not be inserted!');


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
        // dd($product);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        // dd($product);
        $product = Product::find($id);
        // $categories = Category::all();
        return view('cms.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('fd');
        //
        $product = Product::find($id);
        $product->name = $request->input('productName');
        $product->price = $request->input('productPrice');
        $product->description = $request->input('productDetail');
        // $product->discount = $request->input('productDiscount');
        // $product->is_hot_product = $request->input('isHotProduct') ? true : false;
        // $product->is_new_arrival = $request->input('isNewArrival') ? true : false;
        // $product->category_id = $request->input('category');
        // $product->user_id = 0;
        if($product->save()){
            $photo = $request->file('productPhoto');
            if($photo != null){
                $ext = $photo->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' . $ext;
                if($ext == 'jpg' || $ext == 'png'){
                    if($photo->move(public_path().'/img', $fileName)){
                        $product = Product::find($product->id);
                        // $product->photo = url('/') . '/' . $fileName;
                        $product->img =$fileName;
                        $product->save();
                    }
                }
            }
            return redirect()->back()->with('success', 'Product information updated successfully!');
        }
        return redirect()->back()->with('failed', 'Product information could not update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        // dd($id);
        // dd('fdf');
        //
        if(Product::destroy($id))
        {
            return redirect()->back()->with('deleted', 'Deleted successfully');
        }
        return redirect()->back()->with('delete-failed', 'Could not delete');
    }
}
