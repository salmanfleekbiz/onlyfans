<?php

namespace App\Http\Controllers\Admin\Productproof;
use Auth;
use DB;
use App\User;
use App\Product;
use App\Productproofs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminproductproofController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($user = Auth::user())
        {
            $user_role = Auth::user()->user_role;
            if($user_role == 1){
            $user = Auth::user();
            $productsproofs = \App\Productproofs::latest('id','desc')->get();
            $product = 'productproofs';
            return view('admin.productproofs.'.$product)->with('user', $user)->with('productsproofs',$productsproofs);
            }else{
                return redirect('/');
            }
        }else{
            $login = 'login';
            return redirect('admin/login');
            //return view('admin.login.'.$login);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if($user = Auth::user())
        {
            $user_role = Auth::user()->user_role;
            if($user_role == 1){
            $user = Auth::user();
            $products = \App\Product::latest('id','desc')->get();
            $create_product = 'create_productproof';
            return view('admin.productproofs.'.$create_product)->with('user', $user)->with('products',$products);
            }else{
                return redirect('/');
            }
        }else{
            $login = 'login';
            return redirect('admin/login');
            //return view('admin.login.'.$login);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $productproof = new Productproofs();
        $productproof->product_id=$request->input("productid");
        $productproof->title=$request->input("productproofname");
        $productproof->amount= $request->input("productproofamount");
        $productproof->created_at=date("Y-m-d H:i:s");
        $productproof->updated_at=date("Y-m-d H:i:s");
        $productproof->save();
        $productproof = $productproof->id;
        return redirect()->back()->with('message', 'ProductProof added Sucessfully !!!.');
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
        if($user = Auth::user())
        {
            $user_role = Auth::user()->user_role;
            if($user_role == 1){
            $user = Auth::user();
            $products = \App\Product::latest('id','desc')->get();
            $productproofdata = \App\Productproofs::where('id',$id)->first();
            $edit_productproof = 'edit_productproof';
            return view('admin.productproofs.'.$edit_productproof)->with('user', $user)->with('productproofdata',$productproofdata)->with('products',$products);
            }else{
                return redirect('/');
            }
        }else{
            $login = 'login';
            return redirect('admin/login');
            //return view('admin.login.'.$login);
        }
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
        
          $productproof = \App\Productproofs::where('id',$id)->first();
          $productproof->product_id=$request->input("productid");
          $productproof->title=$request->input("productproofname");
          $productproof->amount=$request->input("productproofamount");
          $productproof->updated_at=date("Y-m-d H:i:s");
          $productproof->save();
          $productproof = $productproof->id;
          return redirect()->back()->with('message', 'ProductProof Update Sucessfully !!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productproof = \App\Productproofs::find($id);   
        $productproof->delete();     
        return Redirect::back()->withMessage('ProductProof Successfuly deleted.');  
    }
}
