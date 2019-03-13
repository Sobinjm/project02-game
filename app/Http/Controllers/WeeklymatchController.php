<?php

namespace App\Http\Controllers;

use App\weeklymatch;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use File;

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
            'm_day'=>'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            

    ]);

   

    if($request->hasfile('filename'))
    {
        $galleryId=rand();
        $path1 = public_path().'/images/poster/banner/' . $galleryId;
        $path2 = public_path().'/images/poster/smallbanner/' . $galleryId;
        
        File::makeDirectory($path1, $mode = 0777, true, true);
        File::makeDirectory($path2, $mode = 0777, true, true);
        $file=$request->file('filename');
        $name=rand().'.'.$file[0]->getClientOriginalExtension();
           $file[0]->move(public_path('images/poster/banner/'.$galleryId), $name);
           $file[1]->move(public_path('images/poster/smallbanner/'.$galleryId), $name);
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

        $match =new weeklymatch;
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
        $match->m_day=$request->m_day;
       

        if($match->save()){
           
            $request->session()->flash('alert-success','Post was add successfully !');
            return redirect()->back(); 

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
    public function destroy(weeklymatch $id)
    {
        
    }
    public function delete($id)
    {
        $delete=weeklymatch::find($id);
        // echo $delete['galleryId'];
        if($delete->delete()){
            // echo $delete['galleryId'];

            File::deleteDirectory(public_path('images/poster/banner/'.$delete['galleryId']));
            File::deleteDirectory(public_path('images/poster/smallbanner/'.$delete['galleryId']));

            session()->flash('alert-danger','Post was deleted !');
            return redirect()->back();
        }
    }
    public function addmatch()
    {
        return view('admin.layouts.addmatch');
    }
    public function matchedit($id)
    {
        $edit['matchedit']=weeklymatch::find($id);
            // print_r($edit['matchedit']['galleryId']);
            $galleryId=$edit['matchedit']['galleryId'];
        // $images = File::allFiles(public_path('images/user/'.$galleryId));
        return view('admin.layouts.matchedit',$edit);

    


    }

    public function matchupdate(Request $request , $id){
        $galleryId=$request->galleryId;
        $path1 = public_path().'/images/poster/banner/' . $galleryId;
        $path2 = public_path().'/images/poster/smallbanner/' . $galleryId;
        $file=$request->file('filename');
       
    if($request->hasfile('filename1') && $request->hasfile('filename2') )
    {
        $name1=rand().'.'.$request->filename1->getClientOriginalExtension();
        $name2=rand().'.'.$request->filename2->getClientOriginalExtension();
        $request->filename1->move(public_path('images/poster/banner/'.$galleryId), $name1);
        $request->filename2->move(public_path('images/poster/smallbanner/'.$galleryId), $name2);


    }
    else if($request->hasfile('filename1')){
        $name=rand().'.'.$request->filename1->getClientOriginalExtension();
        $request->filename1->move(public_path('images/poster/banner/'.$galleryId), $name);
     

    }
    else if($request->hasfile('filename2')){
        $name=rand().'.'.$request->filename2->getClientOriginalExtension();
        $request->filename2->move(public_path('images/poster/smallbanner/'.$galleryId), $name);
 

    }
    $match =weeklymatch::find($id);
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
    $match->m_day=$request->m_day;

    if($match->save()){
       
        $request->session()->flash('alert-success','Post wad  updated !');
        return redirect('/admin'); 

    }
    else{
        echo"faildf";
    }
}

    public function weekshow()
    {
        $show['show']=weeklymatch::all();
        
        return view('admin.layouts.weekshow',$show);
    }
    public function matchdetails($id)
    {
        $matchdetails['matchdetails']=weeklymatch::find($id);
        return view('admin.layouts.matchdetails', $matchdetails);

    }
    public function imagedelete1(Request $request,$galleryId) {
        $dirname1 = "images/poster/banner/".$galleryId."/";
                                                
        $images = glob($dirname1."*.jpg");
            File::delete(public_path($images[0]));

            session()->flash('alert-danger','image was deleted !');
            return redirect()->back();

     }
     public function imagedelete2(Request $request,$galleryId) {
            $dirname2 = "images/poster/smallbanner/".$galleryId."/";
                                                
            $images = glob($dirname2."*.jpg");
                File::delete(public_path($images[0]));

            session()->flash('alert-danger','image was deleted !');
            return redirect()->back();

     }
     public function activestatus($id){
         $find['find']=weeklymatch::find($id);
         $check=$find['find']['post_active'];

         if($check==1){
            $find=weeklymatch::find($id);
             $find->post_active="0";
             $find->save();
             return redirect()->back();
         }
         else{
            $find=weeklymatch::find($id);
             $find->post_active="1";
             $find->save();
             return redirect()->back();
         }
        // print_r($find);
     }
     
}