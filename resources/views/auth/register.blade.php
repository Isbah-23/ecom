<!DOCTYPE html>
<html lang="en">
  @include('basiclayout/mainheader')
  <body class="">
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
            <div class="container-fluid ps-2 pe-0">
              <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="{{ route('dashboard') }}">Material Dashboard 2</a>
              <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ route('dashboard') }}">
                      <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i> Dashboard
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('profile') }}">
                      <i class="fa fa-user opacity-6 text-dark me-1"></i> Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('register') }}">
                      <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> Sign Up
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('login') }}">
                      <i class="fas fa-key opacity-6 text-dark me-1"></i> Sign In
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav d-lg-flex d-none">
                  <li class="nav-item d-flex align-items-center">
                    <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/product/material-dashboard" class="btn btn-sm mb-0 me-1 bg-gradient-dark">Free download</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <main class="main-content  mt-0">
      <section>
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('img/illustrations/illustration-signup.jpg') }}'); background-size: cover;">
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                  <div class="card-header">
                    <h4 class="font-weight-bolder">Sign Up</h4>
                    <p class="mb-0">Enter your email and password to register</p>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="mb-3">
                        <input id="name" class="form-control border" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />
                      </div>
                      <div class="mb-3">
                        <input id="email" class="form-control border" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
                      </div>
                      <div class="mb-3">
                        <input id="password" class="form-control border" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                      </div>
                      <div class="mb-3">
                        <input id="password_confirmation" class="form-control border" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
                      </div>
                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                      <div class="form-check form-check-info text-start ps-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                      </div>
                      @endif
                      <div class="mb-3">
                          <label for="role" class="form-label">Select Role:</label>
                          <select id="role" class="form-select" name="role" required>
                              <option value="user">User</option>
                              <option value="admin">Admin</option>
                          </select>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">{{ __('Register') }}</button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                      Already have an account?
                      <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-dashboard.min.js?v=3.1.0') }}"></script>
  </body>
</html>
