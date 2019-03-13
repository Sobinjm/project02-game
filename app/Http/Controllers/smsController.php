<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\User;
class smsController extends Controller
{


    public function mobverify($id){
    $mobile_code=rand();
    // echo $id;
    // echo $mobile_code;
  
    $user=user::find($id);
// print_r($user);

    $user->mobile_code=$mobile_code;
if($user->save()){
    $Textlocal = new Textlocal(false, false, 'R07SUyqB7lw-aIOJapZiRUG8cBm3lKl3mxKWGBenbx');
    $mobile='91'.$user['mobile'];
    // echo $mobile;
	$numbers = array($mobile);
	$sender = 'TXTLCL';
	$message = 'your mobile actiaction code is'.$mobile_code;
 
    $response = $Textlocal->sendSms($numbers, $message, $sender);
    // return $response;
    session()->flash('alert-success', 'your verification code has send on your mobile number ');
    return view('auth.mobile_verify');
    print_r($response);
    
}

   
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

    
      public function getInbox(){
        $Textlocal = new Textlocal(false, false, 'apidemo123');
        
        $response = $Textlocal->getInboxes();
        return $response;
      }
    
      public function getmessages(){
        $Textlocal = new Textlocal(false, false, 'your apiKey');
        
        $inbox_id = '1234';
        
        $response = $Textlocal->getMessages($inbox_id);
    
        return $response;
      }
    }

