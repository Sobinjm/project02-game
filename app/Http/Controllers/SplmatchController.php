<?php

namespace App\Http\Controllers;

use App\splmatch;
use Illuminate\Http\Request;
use File;

class SplmatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\splmatch  $splmatch
     * @return \Illuminate\Http\Response
     */
    public function show(splmatch $splmatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\splmatch  $splmatch
     * @return \Illuminate\Http\Response
     */
    public function edit(splmatch $splmatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\splmatch  $splmatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, splmatch $splmatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\splmatch  $splmatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(splmatch $splmatch)
    {
        //
    }

    public  function splmatch(Request $request){

        
     
      
 


     
        $this->validate($request, [
            'game_id'=>'required',
            'm_title'=>'required',
            'm_type'=>'required',
            'description'=>'required',
            'rules'=>'required',
            'time_zone'=>'required', 
            'prize'=>'required',
            'team_type'=>'required',
            'member_type'=>'required',
            'tagline'=>'required',
            'entry_fee'=>'required',
            'm_date'=>'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            

    ]);

   

    if($request->hasfile('filename'))
    {
        $galleryId=rand();
        $path1 = public_path().'/images/poster/splmatch/banner/' . $galleryId;
        $path2 = public_path().'/images/poster/splmatch/smallbanner/' . $galleryId;
        
        File::makeDirectory($path1, $mode = 0777, true, true);
        File::makeDirectory($path2, $mode = 0777, true, true);
        $file=$request->file('filename');
        $name=rand().'.'.$file[0]->getClientOriginalExtension();
           $file[0]->move(public_path('images/poster/splmatch/banner/'.$galleryId), $name);
           $file[1]->move(public_path('images/poster/splmatch/smallbanner/'.$galleryId), $name);
           $data[] = $name; 
           
           
        //    loop image
    //    foreach($request->file('filename') as $image)
    //    {
        //    $name=rand().'.'.$image->getClientOriginalExtension();
        //    $image->move(public_path('images/user/'.$galleryId), $name);  
        //    $data[] = $name;  
          
    //    }
        // loopimagre


    }

    // $date=$request->m_date;
    // $unixTimestamp = strtotime($date);
    // $dayOfWeek = date("l", $unixTimestamp);

        $match =new splmatch;
        $match->game_id=$request->game_id;
        $match->galleryId= $galleryId;
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
        $match->tagline=$request->tagline;
        $match->entry_fee=$request->entry_fee;
        $match->m_date=$request->m_date;
       

        if($match->save()){
           
            $request->session()->flash('alert-success','Post was add successfully !');
            return redirect()->back(); 

        }
        else{
            echo"faildf";
        }

    }
    public function splmatchupdate(Request $request , $id){
        $galleryId=$request->galleryId;
        $path1 = public_path().'/images/poster/splmatch/banner/' . $galleryId;
        $path2 = public_path().'/images/poster/splmatch/smallbanner/' . $galleryId;
        $file=$request->file('filename');
       
    if($request->hasfile('filename1') && $request->hasfile('filename2') )
    {
        $name1=rand().'.'.$request->filename1->getClientOriginalExtension();
        $name2=rand().'.'.$request->filename2->getClientOriginalExtension();
        $request->filename1->move(public_path('images/poster/splmatch/banner/'.$galleryId), $name1);
        $request->filename2->move(public_path('images/poster/splmatch/smallbanner/'.$galleryId), $name2);


    }
    else if($request->hasfile('filename1')){
        $name=rand().'.'.$request->filename1->getClientOriginalExtension();
        $request->filename1->move(public_path('images/poster/splmatch/banner/'.$galleryId), $name);
     

    }
    else if($request->hasfile('filename2')){
        $name=rand().'.'.$request->filename2->getClientOriginalExtension();
        $request->filename2->move(public_path('images/poster/splmatch/smallbanner/'.$galleryId), $name);
 

    }
    $match =splmatch::find($id);
    $match->game_id=$request->game_id;
    $match->galleryId= $galleryId;


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
    $match->tagline=$request->tagline;
    $match->entry_fee=$request->entry_fee;
    // $match->m_date=$request->m_day;

    if($match->save()){
       
        $request->session()->flash('alert-success','Post wad  updated !');
        return redirect('/admin'); 

    }
    else{
        echo"faildf";
    }
}
    public function delete($id)
    {
        $delete=splmatch::find($id);
        // echo $delete['galleryId'];
        if($delete->delete()){
            // echo $delete['galleryId'];

            File::deleteDirectory(public_path('images/poster/splmatch/banner/'.$delete['galleryId']));
            File::deleteDirectory(public_path('images/poster/splmatch/smallbanner/'.$delete['galleryId']));

            session()->flash('alert-danger','Post was deleted !');
            return redirect()->back();
        }
    }
    public function splmatchedit($id)
    {
        $edit['matchedit']=splmatch::find($id);
            // print_r($edit['matchedit']['galleryId']);
            $galleryId=$edit['matchedit']['galleryId'];
        // $images = File::allFiles(public_path('images/user/'.$galleryId));
        return view('admin.layouts.splmatch_edit',$edit);

    


    }
    public function splimagedelete1(Request $request,$galleryId) {
        $dirname1 = "images/poster/splmatch/banner/".$galleryId."/";
                                                
        $images = glob($dirname1."*.jpg");
            File::delete(public_path($images[0]));

            session()->flash('alert-danger','image was deleted !');
            return redirect()->back();

     }
     public function splimagedelete2(Request $request,$galleryId) {
            $dirname2 = "images/poster/splmatch/smallbanner/".$galleryId."/";
                                                
            $images = glob($dirname2."*.jpg");
                File::delete(public_path($images[0]));

            session()->flash('alert-danger','image was deleted !');
            return redirect()->back();

     }
}
