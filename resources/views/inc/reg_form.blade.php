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
              {!! Form::open(['enctype' => 'multipart/form-data','files'=>true,'id'=>'reg_f']) !!}
               @csrf

                <div class="youplay-input">
                  {{ Form::input('text','username', '',['placeholder'=>'Enter your Username','id'=>'username']) }}
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>
                 <div class="youplay-input">
                  {{ Form::input('email','email', '',['placeholder'=>'Enter your email','id'=>'email']) }}
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>

                <div class="youplay-input">
                  {{ Form::input('text', 'mobile', '',['placeholder'=>'Enter your mobile','id'=>'mobile']) }}
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>

                <div class="youplay-input">

                  {{ Form::input('password','password', '',['placeholder'=>'Enter your Password','id'=>'password']) }}
                  <!-- <input type="password" name="password" placeholder="Password"> -->
                </div>
               
                 <div class="youplay-input">

                  {{ Form::input('hidden','status', '0') }}
                  <!-- <input type="password" name="password" placeholder="Password"> -->
                </div>
                  {{ Form::button('register', ['class'=>'btn btn-default db','id'=>'ajaxSubmit']) }}
                <!-- <button class="btn btn-default db">Login</button> -->


             {!! Form::close() !!}

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
</script>
<script>
  jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){



              if(jQuery('#username').val()==""){
                 alert('sucess');
              }
              //  e.preventDefault();
              //  $.ajaxSetup({
              //     headers: {
              //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              //     }
              // });
              //  jQuery.ajax({
              //     url: "{{ url('/grocery/post') }}",
              //     method: 'post',
              //     data: {
              //        name: jQuery('#name').val(),
              //        type: jQuery('#type').val(),
              //        price: jQuery('#price').val()
              //     },
              //     success: function(result){
              //        console.log(result);
              //     }});

             
               });
            });

</script>
          