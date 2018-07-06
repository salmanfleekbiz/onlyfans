<?php

namespace App\Http\Controllers\Admin\Resellercode;
use Auth;
use DB;
use App\User;
use App\Resellercode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminresellerController extends Controller
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
            $resellercode = \App\Resellercode::latest('id','desc')->get();
            $reseller = 'resellercode';
            return view('admin.resellercode.'.$reseller)->with('user', $user)->with('resellercode',$resellercode);
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
            $create_resellercode = 'create_resellercode';
            return view('admin.resellercode.'.$create_resellercode)->with('user', $user);
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

        if (Resellercode::where('reseller_code', '=', $request->input("reseller_code"))->count() > 0) {
          return redirect('admin/resellercode/createresellercode')->withErrors("Reseller code already exists");
        }else{

        $reseller = new Resellercode();
        $reseller->reseller_code=$request->input("reseller_code");
        $reseller->created_at=date("Y-m-d H:i:s");
        $reseller->updated_at=date("Y-m-d H:i:s");
        $reseller->save();
        $resellerId = $reseller->id;
        return redirect()->back()->with('message', 'Reseller code added Sucessfully !!!.');
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
            $resellerdata = \App\Resellercode::where('id',$id)->first(); 
            $edit_resellercode = 'edit_resellercode';
            return view('admin.resellercode.'.$edit_resellercode)->with('user', $user)->with('resellerdata',$resellerdata);
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
          $reseller = \App\Resellercode::where('id',$id)->first();
          $reseller->reseller_code=$request->input("reseller_code");
          $reseller->updated_at=date("Y-m-d H:i:s");
          $reseller->save();  
          return redirect()->back()->with('message', 'Reseller code Update Sucessfully !!!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $reseller = \App\Resellercode::find($id);
       $reseller->delete();
       return Redirect::back()->withMessage('Reseller code Successfuly deleted.');
    }
}
