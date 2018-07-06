<?php

namespace App\Http\Controllers\Admin\Product;
use Auth;
use DB;
use App\User;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminproductController extends Controller
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
            $products = \App\Product::latest('id','desc')->get();
            $product = 'product';
            return view('admin.product.'.$product)->with('user', $user)->with('products',$products);
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
            //$categories = \App\Category::latest('id','desc')->get();
            $categories = DB::table('categories')->select('categories.category_name')
            ->join('subcategories', 'categories.id', '=', 'subcategories.cat_id')
            ->select('categories.id as parent_cat_id', 'subcategories.id as sub_cat_id','categories.category_name as parent_cat_name','subcategories.category_name as sub_cat_name')
            ->get();
            $create_product = 'create_product';
            return view('admin.product.'.$create_product)->with('user', $user)->with('categories',$categories);
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
        if ( Input::hasFile('productimage') ):
          $target_path = "public/uploads/productimages/";
          $validextensions = array("jpeg", "jpg", "png");
          $ext = explode('.', basename($_FILES['productimage']['name']));
          $target_path = $target_path . $_FILES['productimage']['name'];
          move_uploaded_file($_FILES['productimage']['tmp_name'], $target_path);
        endif;

        $product = new Product();   
        $product->cat_id=$request->input("productcategory");
        $product->product_name=$request->input("productname");
        $product->product_image= (Input::hasFile('productimage')) ? $_FILES['productimage']['name'] : NULL ;
        $product->frame_color=implode(",",$request->input("color"));
        $product->width=$request->input("width");
        $product->height=$request->input("height");
        $product->assemblytime=$request->input("assemblytime");
        $product->stand=$request->input("stand");
        $product->graphic_attachment=$request->input("graphicattachment");
        $product->cases=$request->input("case");
        $product->min_width=$request->input("graphicminwidth");
        $product->max_width=$request->input("graphicmaxwidth");
        $product->min_height=$request->input("graphicminheight");
        $product->max_height=$request->input("graphicmaxheight");
        $product->product_description=$request->input("productdescription");
        $product->created_at=date("Y-m-d H:i:s");
        $product->updated_at=date("Y-m-d H:i:s");
        $product->save();
        $productId = $product->id;
        return redirect()->back()->with('message', 'Product added Sucessfully !!!.');
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
            $categories = DB::table('categories')->select('categories.category_name')
            ->join('subcategories', 'categories.id', '=', 'subcategories.cat_id')
            ->select('categories.id as parent_cat_id', 'subcategories.id as sub_cat_id','categories.category_name as parent_cat_name','subcategories.category_name as sub_cat_name')
            ->get();
            $productdata = \App\Product::where('id',$id)->first();
            $edit_product = 'edit_product';
            return view('admin.product.'.$edit_product)->with('user', $user)->with('categories',$categories)->with('productdata',$productdata);
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
        $product = \App\Product::where('id',$id)->first();

        if ( Input::hasFile('productimage') ):
          $target_path = "public/uploads/productimages/";
          $validextensions = array("jpeg", "jpg", "png");
          $ext = explode('.', basename($_FILES['productimage']['name']));
          $target_path = $target_path . $_FILES['productimage']['name'];
          move_uploaded_file($_FILES['productimage']['tmp_name'], $target_path);

          $product->cat_id=$request->input("productcategory");
          $product->product_name=$request->input("productname");
          $product->product_image= (Input::hasFile('productimage')) ? $_FILES['productimage']['name'] : NULL ;
          $product->frame_color=implode(",",$request->input("color"));
          $product->width=$request->input("width");
          $product->height=$request->input("height");
          $product->assemblytime=$request->input("assemblytime");
          $product->stand=$request->input("stand");
          $product->graphic_attachment=$request->input("graphicattachment");
          $product->cases=$request->input("case");
          $product->min_width=$request->input("graphicminwidth");
          $product->max_width=$request->input("graphicmaxwidth");
          $product->min_height=$request->input("graphicminheight");
          $product->max_height=$request->input("graphicmaxheight");
          $product->product_description=$request->input("productdescription");
          $product->updated_at=date("Y-m-d H:i:s");
          $product->save();
          $productId = $product->id;
          return redirect()->back()->with('message', 'Product Update Sucessfully !!!.');

        else:

          $product->cat_id=$request->input("productcategory");
          $product->product_name=$request->input("productname");
          $product->frame_color=implode(",",$request->input("color"));
          $product->width=$request->input("width");
          $product->height=$request->input("height");
          $product->assemblytime=$request->input("assemblytime");
          $product->stand=$request->input("stand");
          $product->graphic_attachment=$request->input("graphicattachment");
          $product->cases=$request->input("case");
          $product->min_width=$request->input("graphicminwidth");
          $product->max_width=$request->input("graphicmaxwidth");
          $product->min_height=$request->input("graphicminheight");
          $product->max_height=$request->input("graphicmaxheight");
          $product->product_description=$request->input("productdescription");
          $product->updated_at=date("Y-m-d H:i:s");
          $product->save();
          $productId = $product->id;
          return redirect()->back()->with('message', 'Product Update Sucessfully !!!.');
        endif;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_proof = \App\Productproofs::latest('id','desc')->where('product_id',$id)->get();
        $product_accessories = \App\Productaccessories::latest('id','desc')->where('product_id',$id)->get();
        $product_warranty = \App\Productwarranty::latest('id','desc')->where('product_id',$id)->get();
        $product_variation = \App\Productvariation::latest('id','desc')->where('product_id',$id)->get();

        if(!$product_proof->isEmpty()){
              return Redirect::back()->withErrors("Before Product Delete you must be delete releavnt product proof of this product");
        }else if(!$product_accessories->isEmpty()){
              return Redirect::back()->withErrors("Before Product Delete you must be delete releavnt product accessories of this product");
        }else if(!$product_warranty->isEmpty()){
              return Redirect::back()->withErrors("Before Product Delete you must be delete releavnt product warranty of this product");
        }else if(!$product_variation->isEmpty()){
              return Redirect::back()->withErrors("Before Product Delete you must be delete releavnt product variation of this product");
        }else{
          $product = \App\Product::find($id);   
          $product->delete();     
          return Redirect::back()->withMessage('Product Successfuly deleted.');  
        }
    }
}
