@extends('layouts.blank')

@section('content')


@if(auth::user()->mobile_status==="0")
<div class="youplay-form">
    <h3>Verify your number</h3>
                   
                        <div class="youplay">
                                Please first  verify Your Mobile number <a href="/profile">Go to profile-Setting</a>
                                
                           
                        </div>

                   
                </div>

@elseif(count($enroll)==true)
<div>
        already paid
<a href="/transaction-status/{{ $enroll[0]['order_id'] }}">Check Status</a>


</div>
@elseif(count($gamer)==true)
@include('inc.enrollNow')
@else
@include('inc.gamer') 

@endif


@endsection
@section('content2')
@include('inc.footer')
    
@endsection