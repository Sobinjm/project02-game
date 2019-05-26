<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Enroll;
use App\GamerDetails;
use App\weeklymatch;
use App\splmatch;

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
        // $poster['poster']=weeklymatch::where('post_active', '1' )->get();

       
        // $poster['poster']=weeklymatch::all();
        // $poster['poster'] = weeklymatch::orderBy('m_day', 'ACS')->get();
        $poster['poster']=weeklymatch::where('post_active', '1' )->get();
        $splposter['splposter']=splmatch::all();       
        return view('welcome')->with($poster)->with($splposter); 

        //   return view('Home',$poster);
    }

   
      public function logout(Request $request){
        $request->session()->flush();
        return redirect('/home');
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

    public function matchdetails($id){
        $details['details']=weeklymatch::find($id);
        return view('match-details',$details);

    }

    public function enrollnow($id,$uid){

        $poster['poster']=weeklymatch::find($id);
        $game_id=$poster['poster']['game_id'];

        $gamer=GamerDetails::where([
            ['user_id',$uid],
            ['game_id',$game_id],
        ])->get();
        $enroll=Enroll::where([
            ['user_id',$uid],
            ['match_id',$game_id],
            ['g_id',$id],['payment_status',!null]
        ])->get();
$poster=weeklymatch::find($id);
        return view('enroll',[
            'poster'=>$poster,

            'enroll' => $enroll,
            'gamer'=>$gamer,
           
         ]);
    }


    public function mobverify(){
        return view('auth.mobile_verify');
    }

 public function mob_verify(Request $request){
       $code= $request->mobile_code;
       $userid=$request->uid;
       $user['user']=user::find($userid);
       $conf_code= $user['user']['mobile_code'];
       $status=$user['user']['mobile_status'];
       if($code===$conf_code){
           $user=user::find($userid);
           $user->mobile_status=1;
           if($user->save())
           {
                return redirect('/profile');
           }
       }
       else{
           echo "0";
       }


    }

    public function match_register(Request $request)
    {


        $this->validate($request, [
          
            'gamer_id'=>'required|unique:gamer_details|min:5',
            'u_gamename'=>'required'
            

    ]);


        $match['match']=weeklymatch::find($request->g_id);
       $matchday= $match['match']['m_day'];
        $date = Carbon::parse('next '.$matchday.'')->toDateString();



        $game_id=$request->game_id;
        $user_id=$request->user_id;
        $u_gameid=$request->gamer_id;
        $u_gamename=$request->u_gamename;
        
        $enroll=new GamerDetails;
        $enroll->game_id=$game_id;
        $enroll->user_id=$user_id;
        $enroll->gamer_id=$u_gameid;
        $enroll->username=$u_gamename;
        if($enroll->save()){
            
            $g_id=$match['match']['id'];
            $gamer=GamerDetails::where([
                ['user_id',$user_id],
                ['game_id',$game_id],
            ])->get();

            $enroll=Enroll::where([
                ['user_id',$user_id],
                ['match_id',$game_id],
                ['g_id',$g_id],
            ])->get();
            $poster=weeklymatch::find($request->g_id);
            $request->session()->flash('alert-success', 'date was create successfully!');
            return view('enroll',[
                'poster'=>$poster,
    
                'enroll' => $enroll,
                'gamer'=>$gamer,
               
             ]);

        }
        else{
            $request->session()->flash('alert-danger', 'date was create not successfully!');
            return redriect()->back();
        }
        
    }
    public function enroll(Request $request)
    {
        $match['match']=weeklymatch::find($request->g_id);
       $matchday= $match['match']['m_day'];
        $date = Carbon::parse('next '.$matchday.'')->toDateString();



        $game_id=$request->game_id;
        $user_id=$request->user_id;
        
        $enroll=new Enroll;
        $enroll->match_id=$game_id;
        $enroll->user_id=$user_id;
        $enroll->match_date=$date;
        $enroll->match_type="1";
        $enroll->save();
        
    }
    public function userstatus()
    {
        return view('');
    }

    
}