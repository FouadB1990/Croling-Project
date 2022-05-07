<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function adminIndex()

    {
        $userinfo = User::paginate(9); 
        return view('admin/dashboard',['userinfo'=>$userinfo]);
    }

    public function userInfo($id)
    {
        // if ($id = auth()->user()->id)
        {
            $sailorinfo = User::find($id);
            return view("admin/userinfo", ['sailorinfo'=>$sailorinfo]);
            // return view ("admin/userinfo");
        }
        
    }

    public function deletuser(Request $request)
    {
        // if ($id = auth()->user()->id)
        {
            $deletuser = User::findOrFail($request->id)->delete();
            toastr()->success('user has been delete');
        
            return redirect()->route('admin.index');
           
        }
        
    }


}
