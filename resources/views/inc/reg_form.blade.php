<div class="youplay-form">
               <!--  @if(count($errors)>0)

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    @foreach($errors->all() as $error)
                    <strong>Warning!</strong> {{$error}} <br>

                    @endforeach
                </div>

                @endif -->

                  <div>
               <h1>{{Session::get('alert-success')}} </h1>

               
                  
                </div>
             

              <h1>Register</h1>

             <!--  <div class="btn-group social-list dib">
                <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
              </div>
 -->
              {!! Form::open(['url' => '/register','enctype' => 'multipart/form-data','files'=>true,'id'=>'reg_f','method'=>'POST']) !!}
               @csrf

                <div class="youplay-input">
                  {{ Form::input('text','username', '',['placeholder'=>'Enter your Username','id'=>'username']) }}
                  @if ($errors->has('username'))
                  <div class="error text-danger">{{ $errors->first('username') }}</div>
                  @endif
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>
                 <div class="youplay-input">
                  {{ Form::input('email','email', '',['placeholder'=>'Enter your email','id'=>'email']) }}
                  @if ($errors->has('email'))
                  <div class="error text-danger">{{ $errors->first('email') }}</div>
                  @endif
                  <span id="email_error"></span>
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>

                <div class="youplay-input">
                  {{ Form::input('text', 'mobile', '',['placeholder'=>'Enter your mobile','id'=>'mobile']) }}
                  @if ($errors->has('mobile'))
                  <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                  @endif
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>

                <div class="youplay-input">

                  {{ Form::input('password','password', '',['placeholder'=>'Enter your Password','id'=>'password']) }}
                  @if ($errors->has('password'))
                  <div class="error text-danger">{{ $errors->first('password') }}</div>
                  @endif
                  <!-- <input type="password" name="password" placeholder="Password"> -->
                </div>
                <div class="youplay-input">

                  {{ Form::input('password','password_confirmation', '',['placeholder'=>'confirm Password','id'=>'password_confirmation']) }}
                  @if ($errors->has('password'))
                  <div class="error text-danger">{{ $errors->first('password') }}</div>
                  @endif
                  <!-- <input type="password" name="password" placeholder="Password"> -->
                </div>
               
                 <div class="youplay-input">

                  {{ Form::input('hidden','status', '0') }}
                  <!-- <input type="password" name="password" placeholder="Password"> -->
                </div>
                  {{ Form::button('register', ['class'=>'btn btn-default db','type'=>'submit','id'=>'btn']) }}
                <!-- <button class="btn btn-default db">Login</button> -->


             {!! Form::close() !!}


      <!--  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>

      <script>
         jQuery(document).ready(function(){
           


              jQuery('#email').blur(function(){
                if(jQuery('#email').val()==""){
                  alert('enter email adress');
                }
                else{
                  var email=jQuery('#email').val();
                jQuery.ajax({
                  url: "{{ url('/emailcheck') }}",
                  method: 'get',
                  data: {
                     email: jQuery('#email').val(),

                  },
                  success: function(response){
                     // alert(response);

                     if(response==1){
                        jQuery('#email').css('box-shadow','0 0px 10px 1px  red');
                        jQuery('#email_error').html("<label class='text-danger'> email already taken</label>");
                       jQuery('#btn').attr('disabled','disabled');

                     }
                     else{
                       jQuery('#email').css('box-shadow','none');
                        jQuery('#email_error').html('');
                        jQuery('#btn').attr('disabled',false);
                     }
                  }});
              }
                 
              });
             
            });
      </script> -->