<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\weeklymatch;
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
        $poster['poster']=weeklymatch::all();
        return view('home',$poster);
    }

   
      public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }

    public function profile(){

        return view('auth.profile');
    }
   
    public function userupdate(Request $request)
        {

    
                if($user=User::find($request->id)){
                //    $image=$request->profile;
                    if($request->hasfile('profile')){
                        
                    $name=$request->id.'.'.$request->profile->getClientOriginalExtension();
                        $request->profile->move(public_path('images/user'), $name);
                        $user->userImage=$name;
                        
                    }

                    $user->dob=$request->dob;
                    $user->city=$request->city;
                    $user->country=$request->country;
                    $user->aboutMe=$request->aboutme;
                    $user->status=$request->status;
                    if($user->save()){
                        return redirect('/profile');
                    }

                   

                }

                else{
                    echo "row not selected";
                }
        

     

    }
}