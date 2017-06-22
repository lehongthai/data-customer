<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = \MessageProduct::TITLE_INDEX;
        $listProduct = Product::getAllProduct();
        return view('admin.product.index', compact('listProduct', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = \MessageProduct::TITLE_CREATE;
        $listCate = Category::all();
        return view('admin.product.create', compact('listCate', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->cate_id = $request->cate_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->note = $request->note;
        $product->last_modify = date('Y-m-d H:i:s');
        $product->user_id = Auth::user()->id;
        if ($product->save()){
            $message = ['level' => 'success', 'flash_message' => \MessageProduct::CREATE_SUCCESS];
        }else{
            $message = ['level' => 'danger', 'flash_message' => \MessageProduct::CREATE_FAILED];
        }
        return redirect('dashboard/product/index')->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = \MessageProduct::TITLE_SHOW;
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=0)
    {
        $title = \MessageProduct::TITLE_EDIT;
        $product = Product::find($id);
        if ($product == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageProduct::PRODUCT_DOES_NOT_EXIST];
            return redirect('dashboard/product/index')->with($message);
        }
        $listCate = Category::all();
        return view('admin.product.update', compact('listCate', 'product', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id=0)
    {
        $product = Product::find($id);
        if ($product == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageProduct::PRODUCT_DOES_NOT_EXIST];
            return redirect('dashboard/product/index')->with($message);
        }

        $product->cate_id = $request->cate_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->note = $request->note;
        $product->last_modify = date('Y-m-d H:i:s');
        $product->user_id = Auth::user()->id;
        if ($product->save()){
            $message = ['level' => 'success', 'flash_message' => \MessageProduct::UPDATE_SUCCESS];
        }else{
            $message = ['level' => 'danger', 'flash_message' => \MessageProduct::CREATE_FAILED];
        }
        return redirect('dashboard/product/index')->with($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=0)
    {
        $product = Product::find($id);
        if ($product == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageProduct::PRODUCT_DOES_NOT_EXIST];
        }else{
            if($product->delete()){
                $message = ['level' => 'success', 'flash_message' => \MessageProduct::DELETE_SUCCESS];
            }else{
                $message = ['level' => 'danger', 'flash_message' => \MessageProduct::DELETE_FAILED];
            }
        }
        return redirect('dashboard/product/index')->with($message);

    }
}
