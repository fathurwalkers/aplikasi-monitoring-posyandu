<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HALAMAN REGISTER</title>
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
                  <div class="col-12">
                      <h3>DAFTAR AKUN</h3>
                  </div>
              </div>

                <form class="pt-3" action="{{ route('post-register') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="login_nama">Nama Lengkap : </label>
                        <input type="text" class="form-control form-control-lg" id="login_nama" placeholder="Nama Lengkap..." name="login_nama">
                    </div>

                    <div class="form-group">
                        <label for="login_email">Email : </label>
                        <input type="text" class="form-control form-control-lg" id="login_email" placeholder="Email..." name="login_email">
                    </div>

                    <div class="form-group">
                        <label for="login_telepon">Nomor Telepon / HP : </label>
                        <input type="text" class="form-control form-control-lg" id="login_telepon" placeholder="No. HP / Telepon..." name="login_telepon">
                    </div>
                    
                    <div class="form-group">
                      <label for="login_username">Username : </label>
                      <input type="text" class="form-control form-control-lg" id="login_username" placeholder="Username..." name="login_username">
                    </div>

                    <div class="form-group">
                        <label for="login_password">Password : </label>
                        <input type="password" class="form-control form-control-lg" id="login_password" placeholder="Password..." name="login_password">
                    </div>

                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">DAFTAR SEKARANG</button>
                    </div>

                </form>
                
                <div class="text-center mt-4 fw-light">
                Sudah punya akun? <button class="badge badge-primary badge-sm" onclick="window.location.href='{{ route('login') }}'">Masuk sekarang</button>
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
