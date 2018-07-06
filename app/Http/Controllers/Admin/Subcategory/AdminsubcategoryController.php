<?php

namespace App\Http\Controllers\Admin\Subcategory;
use Auth;
use DB;
use App\User;
use App\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminsubcategoryController extends Controller
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
            $categories = \App\Subcategory::latest('id','desc')->get();
            $category = 'category';
            return view('admin.subcategory.'.$category)->with('user', $user)->with('categories',$categories);
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
            $categories = \App\Category::latest('id','desc')->get();
            $create_category = 'create_category';
            return view('admin.subcategory.'.$create_category)->with('user', $user)->with('categories',$categories);
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

        if (Subcategory::where('category_name', '=', $request->input("categoryname"))->count() > 0) {
          return redirect('admin/category/createsubcategory')->withErrors("Category already exists");
        }else{

        if ( Input::hasFile('categoryimage') ):
          $target_path = "public/uploads/categoryimages/";
          $validextensions = array("jpeg", "jpg", "png");
          $ext = explode('.', basename($_FILES['categoryimage']['name']));
          $target_path = $target_path . $_FILES['categoryimage']['name'];
          move_uploaded_file($_FILES['categoryimage']['tmp_name'], $target_path);
        endif;

        $category = new Subcategory();
        $category->cat_id=$request->input("categoryid");
        $category->category_name=$request->input("categoryname");
        $category->category_image= (Input::hasFile('categoryimage')) ? $_FILES['categoryimage']['name'] : NULL ;
        $category->category_description=$request->input("categorydescription");
        $category->created_at=date("Y-m-d H:i:s");
        $category->updated_at=date("Y-m-d H:i:s");
        $category->save();
        $categoryId = $category->id;
        return redirect()->back()->with('message', 'Category added Sucessfully !!!.');
        }
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
            $categorydata = \App\Subcategory::where('id',$id)->first(); 
            $categories = \App\Category::latest('id','desc')->get();
            $edit_category = 'edit_category';
            return view('admin.subcategory.'.$edit_category)->with('user', $user)->with('categorydata',$categorydata)->with('categories',$categories);
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
        $category = \App\Subcategory::where('id',$id)->first();

        if ( Input::hasFile('categoryimage') ):
          $target_path = "public/uploads/categoryimages/";
          $validextensions = array("jpeg", "jpg", "png");
          $ext = explode('.', basename($_FILES['categoryimage']['name']));
          $target_path = $target_path . $_FILES['categoryimage']['name'];
          move_uploaded_file($_FILES['categoryimage']['tmp_name'], $target_path);
          $category->category_name=$request->input("categoryname");
          $category->category_image= (Input::hasFile('categoryimage')) ? $_FILES['categoryimage']['name'] : NULL ;
          $category->category_description=$request->input("categorydescription");
          $category->updated_at=date("Y-m-d H:i:s");
          $category->save();
          return redirect()->back()->with('message', 'Category Update Sucessfully !!!.');
        else:
          $category->cat_id=$request->input("categoryid");  
          $category->category_name=$request->input("categoryname");
          $category->category_description=$request->input("categorydescription");
          $category->updated_at=date("Y-m-d H:i:s");
          $category->save();  
          return redirect()->back()->with('message', 'Category Update Sucessfully !!!.');
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
        $product = \App\Product::first();
        if(!empty($product)){
        $exists = $product->where('cat_id', $id)->exists();
        if($exists){
            return Redirect::back()->withErrors("Before Category Delete you must be delete releavnt product of this category");
        }else{
            $category = \App\Subcategory::find($id);   
            $category->delete();     
            return Redirect::back()->withMessage('Category Successfuly deleted.');
        }
        }else{
            $category = \App\Subcategory::find($id);   
            $category->delete();     
            return Redirect::back()->withMessage('Category Successfuly deleted.');
        }
    }
}
