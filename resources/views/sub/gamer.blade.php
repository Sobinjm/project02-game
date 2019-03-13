@extends('layouts.blank')
@section('content')
@include('inc.navbar')

@if(auth::user()->mobile_status==="0")
{{-- <script>window.location = "/mob_verify";</script> --}}
<div class="youplay-form">
    <h3>Verify your number</h3>
                   
                        <div class="youplay">
                                Please first  verify Your phone number <a href="/profile"> profile-Setting</a>
                                
                           
                        </div>

                   
                </div>
@else 
@include('inc.gamer')
@endif
@endsection