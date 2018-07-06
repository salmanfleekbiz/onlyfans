<?php

namespace App\Http\Controllers\Admin\Category;
use Auth;
use DB;
use App\User;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdmincategoryController extends Controller
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
            $categories = \App\Category::latest('id','desc')->get();
            $category = 'category';
            return view('admin.category.'.$category)->with('user', $user)->with('categories',$categories);
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
            $create_category = 'create_category';
            return view('admin.category.'.$create_category)->with('user', $user);
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

        if (Category::where('category_name', '=', $request->input("categoryname"))->count() > 0) {
          return redirect('admin/category/createcategory')->withErrors("Category already exists");
        }else{

        if ( Input::hasFile('categoryimage') ):
          $target_path = "public/uploads/categoryimages/";
          $validextensions = array("jpeg", "jpg", "png");
          $ext = explode('.', basename($_FILES['categoryimage']['name']));
          $target_path = $target_path . $_FILES['categoryimage']['name'];
          move_uploaded_file($_FILES['categoryimage']['tmp_name'], $target_path);
        endif;

        $category = new Category();
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
            $categorydata = \App\Category::where('id',$id)->first(); 
            $edit_category = 'edit_category';
            return view('admin.category.'.$edit_category)->with('user', $user)->with('categorydata',$categorydata);
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
        $category = \App\Category::where('id',$id)->first();

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
        $checkCats = \App\Subcategory::latest('id','desc')->where('cat_id',$id)->get();
        if(!$checkCats->isEmpty()){
            return Redirect::back()->withErrors("Before Category Delete you must be delete releavnt child of this category");
        }else{
            $category = \App\Category::find($id);
            $category->delete();
            return Redirect::back()->withMessage('Category Successfuly deleted.');
        }
    }
}
