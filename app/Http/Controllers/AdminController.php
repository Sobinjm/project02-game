<?php

namespace App\Http\Controllers;

use App\admin;
use App\weeklymatch;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $show['show']=weeklymatch::all();
        return view('admin.adminhome',$show);
    }
    public function welcome()
    {
        
        // $poster['poster']=weeklymatch::all();
        $poster['poster'] = weeklymatch::orderBy('m_day', 'ASC')->get();

       
        return view('welcome',$poster);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function login(Request $request)
    {
        $username=$request->username;
        $password=$request->password;

        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
            

    ]);

        if($username=="admin" && $password=="admin"){
            $request->session()->put('username',"admin");
             return redirect('/admin');
        }
        else{
            $request->session()->flash('alert-danger','Username / Passwor Error!');
        return redirect()->back(); 
        }
    }
    public function logout(Request $request){
        
        $request->session()->flush();
        return redirect('/admin');
    }
}
