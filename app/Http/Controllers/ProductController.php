<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'thumbnail_url', 'status')
            ->paginate(5);

        return view('admin.products.products-list', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.add-product');
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
        $products = new Product;
        $data = $products->fill($request->all());

        if ($request->hasFile('thumbnail_url')) {
            $avt = $request->file('thumbnail_url');
            $avtName = $avt->getClientOriginalName();
            $avtName = $request->name . '_' . $avtName;
            $products->thumbnail_url = $avt->storeAs('image/users', $avtName);
        }
        $products->save();
        return redirect(route('admin.products.index'))->with('status', "Insert successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.add-product', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        //
        $data = $product->fill($request->all());

        if ($request->hasFile('thumbnail_url')) {
            $avt = $request->file('thumbnail_url');
            $avtName = $avt->getClientOriginalName();
            $avtName = $request->name . '_' . $avtName;
            $product->thumbnail_url = $avt->storeAs('image/users', $avtName);
        }
        $product->save();
        return redirect(route('admin.products.index'))->with('status', "Insert successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $data = Product::find($product->id);
        $data->delete();
        return redirect()->route('admin.products.index');
    }

    public function status(Request $request, Product $product)

    {
        $product->fill($request->all());
        // dd($request->all());
        if ($request->input('status') == 1) {
            $product->status = 2;
        } else {
            $product->status = 1;
        }

        $product->save();

        return redirect()->route('admin.products.index');
    }

    public function search(Request $request)
    {
        // dd($request->name);
        if ($request->name == '') {
            $products = Product::select('id', 'name', 'price', 'thumbnail_url', 'status')
                ->paginate(5);
        } else {
            $products = Product::where('name', 'like', '%' . $request->name . '%')->paginate(5);
        };

        return view('admin.products.products-list', [
            'products' => $products
        ]);
    }
}