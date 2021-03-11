@include('links')
  <body>
    
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-6 col-12">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="card box_shadow">
              <div class="card-header text-center">
                <h3>Evergoal</h3>
                <label>Admin Login</label>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <label>Enter Mail id:</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control @error('admin_username') is-invalid @enderror"   name="admin_username" id="admin_username" value="{{ old('admin_username') }}" required autocomplete="admin_username" autofocus>
                                 @error('admin_username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="col-12">
                    <label>Password</label>
                  </div>
                  <div class="col-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>     
                  <div class="col-12 text-right">
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                  </div>   
                  <div class="col-12 mt-2">
                    <button type="submit"  class="btn btn-primary btn-block">Submit</button>
                  </div>            
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>



@include('jslinks')
  </body>
</html>