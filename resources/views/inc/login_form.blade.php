<div class="youplay-form">



        <div>
                  @foreach(['danger','warning','success','info'] as $msg)

                    @if(Session::has('alert-'.$msg  ))

                      <div class="row">
                          <div class="col-md-12">
                            
                            <div id="error">
                              <p class="alert alert-{{$msg}}"   >{{Session::get('alert-'.$msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </p>
                            </div>
                          </div>

                      </div>

                    @endif

                  @endforeach
                  
                </div>
               <!--  @if(count($errors)>0)

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    @foreach($errors->all() as $error)
                    <strong>Warning!</strong> {{$error}} <br>

                    @endforeach
                </div>

                @endif -->
          

              <h1>Login</h1>

             <!--  <div class="btn-group social-list dib">
                <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
              </div>
 -->
              {!! Form::open(['url' => '/user_login','method' => 'POST']) !!}
               @csrf

                <div class="youplay-input">
                  {{ Form::text('username', '',['placeholder'=>'Enter your Username']) }}
                  <!-- <input type="text" name="login" placeholder="Login"> -->
                </div>
                <div class="youplay-input">
                 {{ Form::input('password', 'password', '',['placeholder'=>'Enter your password'])}}
                  <!-- <input type="password" name="password" placeholder="Password"> -->
                </div>

                  {{ Form::button('Login', ['class'=>'btn btn-default db','type'=>'submit']) }}
                <!-- <button class="btn btn-default db">Login</button> -->


             {!! Form::close() !!}
             <br>
             <a href="/user_reg">New User..?</a>
            </div>

            <script type="text/javascript">
              setTimeout(function() {
                $('#error').fadeOut('400');
            }, 4000);

            </script>