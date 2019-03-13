<div class="youplay-form">
      {{-- @if(count($errors)>0)

     <div class="alert alert-danger alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
         </button>
         @foreach($errors->all() as $error)
         <strong>Warning!</strong> {{$error}} <br>

         @endforeach
     </div>

     @endif --}}

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
  

   <h3>Match Register</h3>

  <!--  <div class="btn-group social-list dib">
     <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
     <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
     <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
   </div>
-->
   {!! Form::open(['url' => '/match_register','enctype' => 'multipart/form-data','files'=>true,'id'=>'reg_f','method'=>'POST']) !!}
    @csrf

     <div class="youplay-input">
       {{ Form::input('text','gamer_id', '',['placeholder'=>'Enter your game id','id'=>'u_gameid']) }}
       @if ($errors->has('gamer_id'))
       <div class="error text-danger">{{ $errors->first('gamer_id') }}</div>
       @endif
       <!-- <input type="text" name="login" placeholder="Login"> -->
     </div>
      <div class="youplay-input">
       {{ Form::input('text','u_gamename', '',['placeholder'=>'Enter your game username','id'=>'u_gamename']) }}
       @if ($errors->has('u_gamename'))
       <div class="error text-danger">{{ $errors->first('u_gamename') }}</div>
       @endif
       <span id="email_error"></span>
       <!-- <input type="text" name="login" placeholder="Login"> -->
     </div>
     <input type="hidden" name="game_id" id="" value='{{$poster['game_id']}}'>
    <input type="hidden" name="user_id" id="" value="{{auth::user()->id}}">
    <input type="hidden" name="g_id" value="{{$poster['id']}}">
   

    
     <div class="">
    
            <button type="submit" class="btn btn-primary">
                Next
            </button>

           

    </div>
