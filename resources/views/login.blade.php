<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HALAMAN LOGIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('panel/template') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('panel/template') }}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 border-1 border-black">
              <div class="brand-logo">
                {{-- <img src="{{ asset('panel/template') }}/images/logo.svg" alt="logo"> --}}
              </div>
              <div class="row d-flex justify-content-center text-center">
                  <div class="col-12 mb-2">
                      <h3>HALAMAN LOGIN</h3>
                  </div>
              </div>

              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif

                <form class="" action="{{ route('post-login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="login_username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="login_password">
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn btn-outline-dark text-white text-bold">MASUK</button>
                    </div>
                    {{-- <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input">
                            Ingat saya
                            </label>
                        </div>
                        <a href="#" class="auth-link text-black">Lupa password?</a>
                    </div> --}}
                    {{-- <div class="mb-2 d-flex justify-content-center">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                        <i class="ti-facebook me-2"></i>s
                    </button>
                    </div> --}}
                </form>
                <div class="text-center mt-4 fw-light">
                Belum punya akun? <button class="badge badge-primary badge-sm" onclick="window.location.href='{{ route('register') }}'">Daftar sekarang</button>
                </div>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('panel/template') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('panel/template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('panel/template') }}/js/off-canvas.js"></script>
  <script src="{{ asset('panel/template') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('panel/template') }}/js/template.js"></script>
  <script src="{{ asset('panel/template') }}/js/settings.js"></script>
  <script src="{{ asset('panel/template') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
