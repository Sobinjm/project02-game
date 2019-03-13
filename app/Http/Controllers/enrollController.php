<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\weeklymatch;
use App\Enroll;
use App\GamerDetails;
use Carbon\Carbon;
use PaytmWallet;

class enrollController extends Controller
{

   public function order(Request $request)
   {
    $match['match']=weeklymatch::find($request->g_id);
    $matchday= $match['match']['m_day'];
     $date = Carbon::parse('next '.$matchday.'')->toDateString();
     $game_id=$request->game_id;
     $user_id=$request->user_id;
     $g_id=$request->g_id;
     $order_id=uniqid();
     $enroll=new Enroll;
     $enroll->match_id=$game_id;
     $enroll->user_id=$user_id;
     $enroll->match_date=$date;
     $enroll->g_id=$g_id;

     $enroll->order_id=$order_id;
     $enroll->amount=($request->amount)?$request->amount:'';
     $enroll->match_type="0";
    $enroll->save();
        // $input['order_id'] = uniqid();
        // Enroll::create($input);

        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $order_id, 
          'user' => 'fejin',
          'mobile_number' => '7777777777',
          'email' => 'username@emailprovider.com',
          'amount' => $request->amount,
          'callback_url' => url('api/payment/status')
        ]);
        return $payment->receive();
   }
   public function paymentCallback()
   {
       $transaction = PaytmWallet::with('receive');


       $response = $transaction->response();
       $order_id = $transaction->getOrderId();


       if($transaction->isSuccessful()){
         Enroll::where('order_id',$order_id)->update(['payment_status'=>1, 'transaction_id'=>$transaction->getTransactionId()]);
        return redirect('/transaction-status/'.$order_id);
           
         dd('Payment Successfully Paid.');
       }else if($transaction->isFailed()){
         Enroll::where('order_id',$order_id)->update(['payment_status'=>0, 'transaction_id'=>$transaction->getTransactionId()]);
         return redirect('/transaction-status/'.$order_id);
       }
   } 
   
   
   public function statusCheck($orderid){
    $status = PaytmWallet::with('status');
    $status->prepare(['order' => $orderid]);
    $status->check();
   
    $response = $status->response();
    if($status->isSuccessful()){

      // print_r($response);
      return view('paytm.txn_status')->with('response',$response);
      //Transaction Successful
    }else if($status->isFailed()){
      return view('paytm.txn_status')->with('response',$response);
    }else if($status->isOpen()){
      return view('paytm.txn_status')->with('response',$response);
    }
    $status->getResponseMessage(); //Get Response Message If Available
    //get important parameters via public methods
    $status->getOrderId(); // Get order id
    $status->getTransactionId(); // Get transaction id
}
/**
    * Initiate refund.
    *
    * @return Object
    */
    public function refund(){
      $refund = PaytmWallet::with('refund');
      $refund->prepare([
          'order' => $order->id,
          'reference' => "refund-order-4", // provide refund reference for your future reference (should be unique for each order)
          'amount' => 300, // refund amount 
          'transaction' => $order->transaction_id // provide paytm transaction id referring to this order 
      ]);
      $refund->initiate();
      $response = $refund->response();// To get raw response as array
      
      if($refund->isSuccessful()){
        //Refund Successful
      }else if($refund->isFailed()){
        //Refund Failed
      }else if($refund->isOpen()){
        //Refund Open/Processing
      }else if($refund->isPending()){
        //Refund Pending
      }
  }

    public function refundStatus(){
      $refundStatus = PaytmWallet::with('refund_status');
      $refundStatus->prepare([
          'order' => $order->id,
          'reference' => "refund-order-4", // provide reference number (the same which you have entered for initiating refund)
      ]);
      $refundStatus->check();
      
      $response = $refundStatus->response();// To get raw response as array
      
      if($refundStatus->isSuccessful()){
        //Refund Successful
      }else if($refundStatus->isFailed()){
        //Refund Failed
      }else if($refundStatus->isOpen()){
        //Refund Open/Processing
      }else if($refundStatus->isPending()){
        //Refund Pending
      }
  }
  public function txn_again(Request $request)
  {
  
echo $request->order_id;

      $f_txn=Enroll::where('order_id',$request->order_id)->get();
      // print_r($f_txn[0]);
      // $f_txn[0]->delete();
   if($f_txn[0]->delete()){ 
    $user_id=$request->user_id;
    $game_id=$request->game_id;
    $g_id=$request->g_id;
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
    // $request->session()->flash('alert-success', 'date was create successfully!');
    return view('enroll',[
        'poster'=>$poster,

        'enroll' => $enroll,
        'gamer'=>$gamer,
       
     ]);
    }
  }
}
