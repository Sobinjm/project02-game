
@extends('layouts.blank')
@section('content')
<div class="youplay-form">
    <div>
            @foreach(['danger','warning','success','info'] as $msg)
            @if(Session::has('alert-'.$msg))
                <div id="errorAlert">
                    <p class="alert alert-{{ $msg}}">
                        {{ Session::get('alert-'.$msg)}}
                        <a href="#" class="close" data-dismiss="alert" 	aria-label="close">&times;</a>
                    </p>
                <div>
          
              @endif
              @endforeach
    </div>
    <h3>Verify your number</h3>
                    <form method="POST" action="/mob_verify" autocomplete="none">
                        @csrf
                         @if ($errors->has('email'))
                                   <div class="error text-danger"> 
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>

                                @endif
                        <div class="youplay-input">
                                <input id="mobile_code" type="text" class="form-control{{ $errors->has('mobile_code') ? ' is-invalid' : '' }}" name="mobile_code" value="{{ old('mobile_code') }}" required autofocus placeholder="Enter your verificatiion code here">
                        <input type="hidden" name="uid" value="{{auth::user()->id}}">
                                
                           
                        </div>

                         <div class="">
    
                                <button type="submit" class="btn btn-primary">
                                   Verify
                                </button>

                               

                        </div>
                    </form>
                </div>
@endsection

