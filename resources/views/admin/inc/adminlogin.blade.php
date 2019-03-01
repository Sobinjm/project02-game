<div class="splash-container">
        @foreach(['danger','warning','success','info'] as $msg)

        @if(Session::has('alert-'.$msg  ))

          <div class="row">
              <div class="col-md-12">
                
                <div id="error">
                  <p class="alert alert-{{$msg}}"   >{{Session::get('alert-'.$msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <a href="/admin" > show poster</a> </p>
                </div>
              </div>

          </div>

        @endif

      @endforeach
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="/admin/login" method="post">
                  @csrf
  
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" name="username">
                        @if ($errors->has('username'))
                        <span class="error text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password">
                        @if ($errors->has('password'))
                        <span class="error text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    {{-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            {{-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> --}}
        </div>
    </div>