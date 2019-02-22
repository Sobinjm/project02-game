<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }


      public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }

    public function profile($id){

             $ProfileStatus=User::select("status")->where ('id',$id)->first();
             if(intval($ProfileStatus->status)==0){
                return redirect('/profile_edit');
             }
             else{
                 return redirect('/profile');
             }
    }
    public function profile_success(){
        echo "profile";
    }
       public function profile_edit(){
        return view('auth.profile_edit');
    }
}
