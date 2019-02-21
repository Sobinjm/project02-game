<div class="youplay-form">
                    <form method="POST" action="{{ route('login') }}" autocomplete="none">
                        @csrf
                         @if ($errors->has('email'))
                                   <div class="error text-danger"> 
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>

                                @endif
                        <div class="youplay-input">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email!">

                                
                           
                        </div>
                    

                                 @if ($errors->has('password'))
                                    <div class="error text-danger"> 
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </di>
                                @endif
                         <div class="youplay-input">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter your password!">

                                
                           
                        </div>


                        <div class="">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>

                         <div class="">
    
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               

                        </div>
                    </form>
                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </div>