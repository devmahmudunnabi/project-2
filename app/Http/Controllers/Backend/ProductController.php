<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        return view ('backend.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view ('backend.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productstore(Request $request)
    {
          $product = new ProductModel;
          $product->pname =$request->pname;
          $product->pdesh =$request->pdesh;
          $product->cat =$request->cat;
          $product->scat =$request->scat;
          $product->price =$request->price;
          $product->status =$request->status;
          $product->save();
          return redirect()->route("showproduct");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduct()
    {
        $products = ProductModel::all();
        return view ("backend.showproduct",compact("products"));
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduct($id)  
    {
        $products = ProductModel::find($id); 
        return view ("backend.editproduct",compact("products"));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedata(Request $requests,$id)
    {
        $data = ProductModel::find($id);
        $data->pname =$requests->pname;
        $data->pdesh =$requests->pdesh;
        $data->cat =$requests->cat;
        $data->scat =$requests->scat;
        $data->price =$requests->price;
        $data->status =$requests->status;
        $data->update();
        return redirect()->route("showproduct");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
