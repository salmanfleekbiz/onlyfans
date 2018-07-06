<?php

namespace App\Http\Controllers\Admin\Productwarranty;
use Auth;
use DB;
use App\User;
use App\Product;
use App\Productwarranty;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminproductwarrantyController extends Controller
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
            $productswarranty = \App\Productwarranty::latest('id','desc')->get();
            $product = 'productwarranty';
            return view('admin.productwarranty.'.$product)->with('user', $user)->with('productswarranty',$productswarranty);
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
            $create_product = 'create_productwarranty';
            return view('admin.productwarranty.'.$create_product)->with('user', $user)->with('products',$products);
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

        $productwarranty = new Productwarranty();
        $productwarranty->product_id=$request->input("productid");
        $productwarranty->title=$request->input("productwarrantyname");
        $productwarranty->amount= $request->input("productwarrantyamount");
        $productwarranty->created_at=date("Y-m-d H:i:s");
        $productwarranty->updated_at=date("Y-m-d H:i:s");
        $productwarranty->save();
        $productwarranty = $productwarranty->id;
        return redirect()->back()->with('message', 'ProductWarranty added Sucessfully !!!.');
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
            $productwarrantydata = \App\Productwarranty::where('id',$id)->first();
            $edit_productwarranty = 'edit_productwarranty';
            return view('admin.productwarranty.'.$edit_productwarranty)->with('user', $user)->with('productwarrantydata',$productwarrantydata)->with('products',$products);
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
        
          $productwarranty = \App\Productwarranty::where('id',$id)->first();
          $productwarranty->product_id=$request->input("productid");
          $productwarranty->title=$request->input("productwarrantyname");
          $productwarranty->amount=$request->input("productwarrantyamount");
          $productwarranty->updated_at=date("Y-m-d H:i:s");
          $productwarranty->save();
          $productwarranty = $productwarranty->id;
          return redirect()->back()->with('message', 'ProductWarranty Update Sucessfully !!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productproof = \App\Productwarranty::find($id);   
        $productproof->delete();     
        return Redirect::back()->withMessage('ProductWarranty Successfuly deleted.');  
    }
}
