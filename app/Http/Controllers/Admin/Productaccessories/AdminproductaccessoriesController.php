<?php

namespace App\Http\Controllers\Admin\Productaccessories;
use Auth;
use DB;
use App\User;
use App\Product;
use App\Productaccessories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminproductaccessoriesController extends Controller
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
            $productsaccessories = \App\Productaccessories::latest('id','desc')->get();
            $product = 'productaccessories';
            return view('admin.productaccessories.'.$product)->with('user', $user)->with('productsaccessories',$productsaccessories);
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
            $create_product = 'create_productaccessories';
            return view('admin.productaccessories.'.$create_product)->with('user', $user)->with('products',$products);
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

        $productaccessories = new Productaccessories();
        $productaccessories->product_id=$request->input("productid");
        $productaccessories->title=$request->input("productaccessoriesname");
        $productaccessories->amount= $request->input("productaccessoriesamount");
        $productaccessories->created_at=date("Y-m-d H:i:s");
        $productaccessories->updated_at=date("Y-m-d H:i:s");
        $productaccessories->save();
        $productaccessories = $productaccessories->id;
        return redirect()->back()->with('message', 'ProductAccessories added Sucessfully !!!.');
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
            $productaccessoriesdata = \App\Productaccessories::where('id',$id)->first();
            $edit_productaccessories = 'edit_productaccessories';
            return view('admin.productaccessories.'.$edit_productaccessories)->with('user', $user)->with('productaccessoriesdata',$productaccessoriesdata)->with('products',$products);
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
        
          $productaccessories = \App\Productaccessories::where('id',$id)->first();
          $productaccessories->product_id=$request->input("productid");
          $productaccessories->title=$request->input("productaccessoriesname");
          $productaccessories->amount=$request->input("productaccessoriesamount");
          $productaccessories->updated_at=date("Y-m-d H:i:s");
          $productaccessories->save();
          $productaccessories = $productaccessories->id;
          return redirect()->back()->with('message', 'ProductAccessories Update Sucessfully !!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productproof = \App\Productaccessories::find($id);   
        $productproof->delete();     
        return Redirect::back()->withMessage('ProductAccessories Successfuly deleted.');  
    }
}
