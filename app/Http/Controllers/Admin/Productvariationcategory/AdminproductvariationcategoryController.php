<?php

namespace App\Http\Controllers\Admin\Productvariationcategory;
use Auth;
use DB;
use App\User;
use App\Productvariationcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminproductvariationcategoryController extends Controller
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
            $categories = \App\Productvariationcategory::latest('id','desc')->get();
            $category = 'variationcategory';
            return view('admin.variationcategory.'.$category)->with('user', $user)->with('categories',$categories);
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
            $create_variationcategory = 'create_variationcategory';
            return view('admin.variationcategory.'.$create_variationcategory)->with('user', $user);
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

        $varitationcategory = new Productvariationcategory();
        $varitationcategory->min_qty=$request->input("minimumqty");
        $varitationcategory->max_qty= $request->input("maximumqty");
        $varitationcategory->created_at=date("Y-m-d H:i:s");
        $varitationcategory->updated_at=date("Y-m-d H:i:s");
        $varitationcategory->save();
        $varitationcategoryId = $varitationcategory->id;
        return redirect()->back()->with('message', 'Variation Category added Sucessfully !!!.');
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
            $categorydata = \App\Productvariationcategory::where('id',$id)->first(); 
            $edit_category = 'edit_variationcategory';
            return view('admin.variationcategory.'.$edit_category)->with('user', $user)->with('categorydata',$categorydata);
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
          $variationcategory = \App\Productvariationcategory::where('id',$id)->first();
          $variationcategory->min_qty=$request->input("minimumqty");
          $variationcategory->max_qty=$request->input("maximumqty");
          $variationcategory->updated_at=date("Y-m-d H:i:s");
          $variationcategory->save();  
          return redirect()->back()->with('message', 'Variation Category Update Sucessfully !!!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkCats = \App\Productvariation::latest('id','desc')->where('product_id',$id)->get();
        if(!$checkCats->isEmpty()){
            return Redirect::back()->withErrors("Before Category Delete you must be delete releavnt product variation of this category");
        }else{
            $category = \App\Productvariationcategory::find($id);   
            $category->delete();     
            return Redirect::back()->withMessage('Variation Category Successfuly deleted.'); 
        }
    }
}
