@extends('auth.main')
@section('content')
<div class="container-fluid p-0"> 
  <div class="row m-0">
    <div class="col-xl-5"><img class="bg-img-cover bg-center" src="../assets/images/login/3.jpg" alt="looginpage"></div>
    <div class="col-xl-7 p-0"> 
      <div class="login-card login-dark">
        <div>
          <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
          <div class="login-main"> 
            <form class="theme-form" action="{{ route('regist.post') }}" method="post">
              @csrf
              <h4>Create your account</h4>
              <p>Enter your personal details to create account</p>
              <div class="form-group">
                <label class="col-form-label pt-0">Your Name</label>
                <div class="row g-2">
                  <div class="col-6">
                    <input class="form-control" type="text" required="" placeholder="First name" name="regist[nama_depan]" value="{{ old('regist.nama_depan') }}">
                      @error('regist.nama_depan')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" required="" placeholder="Last name" name="regist[nama_belakang]" value="{{ old('regist.nama_belakang') }}">
                      @error('regist.nama_belakang')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-form-label">Alamat</label>
                <textarea class="form-control" name="regist[alamat]" required="" placeholder="Jl.xxx No.xx, Bxxx, Pxxx, Jxxxx">{{ old('regist.alamat') }}</textarea>
                @error('regist.alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label class="col-form-label">No Handphone</label>
                <input class="form-control" type="number" required="" placeholder="123456789" name="regist[no_hp]" value="{{ old('regist.no_hp') }}">
                @error('regist.no_hp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label class="col-form-label">Email Address</label>
                <input class="form-control" type="email" required="" placeholder="Test@gmail.com" name="regist[email]" value="{{ old('regist.email') }}">
                @error('regist.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                  <input class="form-control" type="password" name="regist[password]" required="" placeholder="*********">
                  <div class="show-hide"><span class="show"></span></div>
                </div>
              </div>
              <div class="form-group mb-0">
                <div class="checkbox p-0">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                </div>
                <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
              </div>
              <h6 class="text-muted mt-4 or">Or signup with</h6>
              <div class="social mt-4">
                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
              </div>
              <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ route('login.show') }}">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="../assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <!-- Sidebar jquery-->
  <script src="../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>
    </div>
@endsection