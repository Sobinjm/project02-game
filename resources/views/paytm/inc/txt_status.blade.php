@php
use App\Enroll;
@endphp
<div class="container youplay-content">
  
        <div class="user-data">
            <h2>Payment Status</h2>
        </div>
         <div class="youplay">
           

                <table class="table table-bordered">
                    <tr>
                        <td>TXNID</td>
                    <td>{{$response['TXNID']}}</td>
                    </tr>
                    <tr>
                        <td>BANKTXNID</td>
                        <td>{{$response['BANKTXNID']}}</td>
                    </tr>
                    <tr>
                        <td>
                            ORDERID
                        </td>
                        <td>{{$response['ORDERID']}}</td>
                    </tr>
                    <tr>
                        <td>
                            TXNAMOUNT
                        </td>
                        <td>Rs {{$response['TXNAMOUNT']}}</td>
                    </tr>
                    <tr>
                        <td>STATUS</td>
                        @if($response['STATUS']=='TXN_SUCCESS')
                        <td class="text-success">{{$response['STATUS']}}</td>
                        @else
                        <td class="text-danger">{{$response['STATUS']}}</td>
                        @endif
                    </tr>
                    @if($response['STATUS']=='TXN_SUCCESS')
                    <tr>
                        <td>GATEWAYNAME</td>
                        <td>{{$response['GATEWAYNAME']}}</td>

                    </tr>
                    <tr>
                        <td>PAYMENTMODE</td>
                        <td>{{$response['PAYMENTMODE']}}</td>
                    </tr>
                    @endif
                </table>
           
                @if($response['STATUS']=='TXN_FAILURE')

               @php

                    $f_txn=Enroll::where('order_id',$response['ORDERID'])->get();
               @endphp
               @if(count( $f_txn)==true)
                <form action="/txn_again" method="post">
                    @csrf
                <input type="hidden" name="user_id" value="{{$f_txn[0]['user_id']}}">
                <input type="hidden" name="game_id" value="{{$f_txn[0]['match_id']}}">
                <input type="hidden" name="g_id" value="{{$f_txn[0]['g_id']}}">
                <input type="hidden" name="order_id" value="{{$response['ORDERID']}}">
                    <button type="submit"  class="btn btn-danger">Try Again to payment</button>
                    @else
                 <a href="/home"><span><i class="btn btn-danger"> Try Again to payment</i></span></a>
                </form>
                   
                    @endif
                @endif
         </div>

</div>