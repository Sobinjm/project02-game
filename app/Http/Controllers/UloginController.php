<?php

namespace App\Http\Controllers;

use App\Ulogin;
use Illuminate\Http\Request;
use App\Http\Requests;
use Hash;

class UloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('login');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $register =new Ulogin;

        $register->username =$request->username;
        $register->email =$request->email;
        $register->mobile =$request->mobile;
        $register->password = Hash::make($request->password);
        $register->status =$request->status;

        $register->dob="-";
        $register->userImage="-";
        $register->city="-";
        $register->country="-";
        $register->aboutMe="-";

        if($register->save()){

            $request->session()->flash('alert-success','Accound registeration successfully please login!');
            return redirect('/user');
        }
        else{
            echo "faild";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function show(Ulogin $ulogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function edit(Ulogin $ulogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ulogin $ulogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ulogin  $ulogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulogin $ulogin)
    {
        //
    }

    public function login(Request $request)
    {
      $username=$request->get('username');
      $password=$request->get('password');
      $checkuser=Ulogin::selectRaw("count(*) as Total")->where('username',$username)->first();
        if(intval($checkuser->Total)>0)
        {
                    $getpassword=Ulogin::select("password")->where ('username',$username)->first();
                if(password_verify($password,$getpassword->password))
                {
                             $select=Ulogin::select("id")-> where('username',$username)->first();
                            $selectId['user']=Ulogin::find($select->id);
                                  $request->session()->put('id',$select->id);
                                 return redirect('/user_edit');

                }
                else{
                     return redirect('/test');
                }

            }
            else{
                return redirect('/test');
            }

     
            // if(intval($checkuser->Total)>0){
                

            //                 $select=register::select("id")-> where('name',$username)->where('password',$password)->first();
            //                 $selectId['user']=register::find($select->id);
            //                       $request->session()->put('id',$select->id);
            //                      return redirect('/home');

            //                     }

                     
                        
            //             else{
            //                 return redirect('/test');
            //             }
        
    }
     public function home()
    {
       return view('home');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/user');
    }
    public function UserProfile(){
      
        return view('user_profile');
    }

    
}
