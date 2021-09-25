
<link rel="stylesheet" type="text/css"
href="{{ URL::asset('/fontawesome-free-5.15.4-web/css/all.min.css') }}">
 <style>
    body {
        background-color: #2c3338
;
    }
 .login{
     text-align: center;
     color: white;

 }
 .enter1 i{
 margin-right: 10px;
 }
 .card-header{
     display: block;
     font-size: 40px;
     
 
 }
 .description{
     color: rgb(212, 212, 212);
     opacity: 0.6;
 }
 .enter1 input{
     width: 256px;
     height: 45px;;
     
     border: 0px;
     text-align: left;
     font-size: 15px;
 }
 .enter{
     margin-top: 20px;
 }.card-body{
     margin-top: 4%;
     border-radius: 5px;
     display: inline-block;
     padding: 100px 200px;
     background-color: rgb(32, 32, 32);
 }
 .form-group1{
     margin-top: 20px;
 }
 .form-group1 button{
    padding: 10px 25px;
    color: white;
    background-color:rgb(32, 32, 32);
    margin-right: 10px;
    border: 1.5px solid greenyellow;

   
 }
 .icon i {
     margin-bottom: 20px;
     margin-right: 20px;
 }
 </style>
<body>
    
    <div class="container-fluid" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login">
            
    
                    <div class="card-body">
                      
                        <div class="card-header">{{ __('Login') }}</div>
                        <label class="description" for="">Please enter your email and password</label>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                               
    
                                <div class="enter">
                              <div class="enter1">
                                <i class="fas fa-user-alt"></i>
                                    
                                  
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                                </div>
                            </div>
    
                            <div class="form-group row">
                              
                                <div class="enter">
                                  <div class="enter1">
                                  <i class="fas fa-lock"></i>
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                            </div>
    
                            <div class="form-group1">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group1 row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

