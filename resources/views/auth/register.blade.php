

 @extends('layouts.auth')

 @section('title', 'sign-up')
 @section('content')
     <!-- tap to top-->
    <div class="tap-top">
      <svg class="feather">
        <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#arrow-up"></use>
      </svg>
    </div>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt="looginpage"><img class="img-fluid for-dark m-auto" src="../assets/images/logo/dark-logo.png" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{route('register')}}">
                    @csrf
                  <h2 class="text-center">Create your account</h2>
                  <p class="text-center">Enter your personal details to create account</p>
                  <div class="form-group">
                    <label class="col-form-label">Your Name</label>
                    <input class="form-control" type="text"  name="name" :value="old('name')" required autofocus autocomplete="name">

                </div>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password"
                            name="password"
                            required autocomplete="new-password">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-form-label">Password Confirm</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password"
                           name="password_confirmation" required autocomplete="new-password">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                    <div class="form-check checkbox-solid-info">
                      <input class="form-check-input" id="solid6" type="checkbox">
                      <label class="form-check-label" for="solid6">Agree with</label><a class="ms-3 link" href="#">Privacy Policy</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100 mt-3" type="submit">Create Account</button>
                  </div>
                  <div class="login-social-title">
                    <h6>Or Sign in with</h6>
                  </div>
                  <div class="form-group">
                    <ul class="login-social">
                      <li><a href="https://www.linkedin.com" target="_blank"><i class="icon-linkedin"></i></a></li>
                      <li><a href="https://twitter.com" target="_blank"><i class="icon-twitter"></i></a></li>
                      <li><a href="https://www.facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
                      <li><a href="https://www.instagram.com" target="_blank"><i class="icon-instagram"></i></a></li>
                    </ul>
                  </div>
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="login.html">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

 @endsection