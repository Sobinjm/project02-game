<?php

namespace App\Http\Controllers;

use App\weeklymatch;
use Illuminate\Http\Request;

class WeeklymatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $match=new weeklymatch;
        $match->m_title=$request->m_title;
        $match->m_type=$request->m_type;
        $match->description=$request->description;
        $match->rules=$request->rules;
        $match->time_zone=$request->time_zone;
        $match->prize=$request->prize;
        $match->result='-';
        $match->video='-';
        $match->team_type=$request->team_type;
        $match->member_type=$request->member_type;
        $match->rating='-';
        $match->categories=$request->categories;
        $match->tagline=$request->tagline;
        $match->entry_fee=$request->entry_fee;

        if($match->save()){
            echo "sucess";

        }
        else{
            echo"faildf";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\weeklymatch  $weeklymatch
     * @return \Illuminate\Http\Response
     */
    public function show(weeklymatch $weeklymatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\weeklymatch  $weeklymatch
     * @return \Illuminate\Http\Response
     */
    public function edit(weeklymatch $weeklymatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\weeklymatch  $weeklymatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, weeklymatch $weeklymatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\weeklymatch  $weeklymatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(weeklymatch $weeklymatch)
    {
        //
    }
}
