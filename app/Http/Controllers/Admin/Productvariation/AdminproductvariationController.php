<?php

namespace App\Http\Controllers\Admin\Productvariation;
use Auth;
use DB;
use App\User;
use App\Product;
use App\Productvariation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminproductvariationController extends Controller
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
            $productsvariation = \App\Productvariation::latest('id','desc')->get();
            $product = 'productvariation';
            return view('admin.productvariation.'.$product)->with('user', $user)->with('productsvariation',$productsvariation);
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
            $products_variation_category = \App\Productvariationcategory::latest('id','desc')->get();
            $create_product = 'create_productvariation';
            return view('admin.productvariation.'.$create_product)->with('user', $user)->with('products',$products)->with('products_variation_category',$products_variation_category);
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

        $productvariation = new Productvariation();
        $productvariation->product_id=$request->input("productid");
        $productvariation->variation_id=$request->input("variationid");
        $productvariation->variation_title= $request->input("variationtitle");
        $productvariation->variation_price= $request->input("variationprice");
        $productvariation->created_at=date("Y-m-d H:i:s");
        $productvariation->updated_at=date("Y-m-d H:i:s");
        $productvariation->save();
        $productvariationId = $productvariation->id;
        return redirect()->back()->with('message', 'ProductVariation added Sucessfully !!!.');
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
            $productvariationdata = \App\Productvariation::where('id',$id)->first();
            $products_variation_category = \App\Productvariationcategory::latest('id','desc')->get();
            $edit_productvariation = 'edit_productvariation';
            return view('admin.productvariation.'.$edit_productvariation)->with('user', $user)->with('productvariationdata',$productvariationdata)->with('products',$products)->with('products_variation_category',$products_variation_category);
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
        
          $productvariation = \App\Productvariation::where('id',$id)->first();
          $productvariation->product_id=$request->input("productid");
          $productvariation->variation_id=$request->input("variationid");
          $productvariation->variation_title= $request->input("variationtitle");
          $productvariation->variation_price= $request->input("variationprice");
          $productvariation->updated_at=date("Y-m-d H:i:s");
          $productvariation->save();
          $productvariationId = $productvariation->id;
          return redirect()->back()->with('message', 'ProductVariation Update Sucessfully !!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productvariation = \App\Productvariation::find($id);   
        $productvariation->delete();     
        return Redirect::back()->withMessage('ProductVariation Successfuly deleted.');  
    }
}
