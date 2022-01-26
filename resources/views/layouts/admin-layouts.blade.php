<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Monitoring Posyandu - @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('panel/template') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset('panel/template') }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('panel/template') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('panel/template') }}/{{ asset('panel/template') }}/images/favicon.png" />

  <link rel="stylesheet" href="{{ asset('assets/datatables') }}/datatables.min.css">
  {{-- <link rel="stylesheet" href="{{ asset('assets/materialize') }}/css/materialize.min.css"> --}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> --}}

  @stack('css')

</head>
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <!-- Bottom Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid mt-3 mb-3">
          <a href="{{ route('dashboard') }}" class="navbar-brand">E-POSYANDU</a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav">
                  <form action="{{ route('profile') }}" method="GET">
                    @csrf
                    <button type="submit" class="nav-item btn btn-sm btn-info mb-1">Profil</button>
                  </form>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-item btn btn-sm btn-danger ">Logout</button>
                  </form>
              </div>
          </div>
      </div>
      {{-- <div class="container-fluid mt-2 mb-1">
        <div class="row justify-content-center d-flex mx-auto">
          <div class="col-sm-12 justify-content-center d-flex mx-auto">

            <ul class="nav justify-content-center d-flex mx-auto">
              <li class="nav-item mr-1">
                <a class="nav-link" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Disabled</a>
              </li>
            </ul>

          </div>
        </div>
      </div> --}}

  </nav>


  <!-- Bottom Navbar -->
  <nav class="navbar navbar-dark bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
    <ul class="navbar-nav nav-justified w-100">

        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-center">
              <i class="fas fa-home"></i>
                <span class="small d-block">Home</span>
            </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('generate-balita') }}" class="nav-link text-center">
            <i class="fas fa-male"></i>
              <span class="small d-block">Akun</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('daftar-jadwal-posyandu') }}" class="nav-link text-center">
              <i class="fas fa-align-justify"></i>
              <span class="small d-block">Jadwal</span>
          </a>
        </li>

        @if ($users->login_level == 'admin')
          <li class="nav-item">
            <a href="#" class="nav-link text-center">
              <i class="fas fa-balance-scale"></i>
                <span class="small d-block">KMS</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-center">
              <i class="fas fa-archive"></i>
                <span class="small d-block">Catatan Imunisasi</span>
            </a>
          </li>
        @endif

    </ul>
  </nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <div class="main-panel">
        <div class="content-wrapper">
          {{-- <div class="row">
            <div class="col-sm-12"> --}}
              <div class="home-tab">

                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">


                    <div class="row mt-0">

                      <div class="col-8">
                        <h3 class="">@yield('main-content-header')</h3>
                      </div>

                      <div class="col-4">
                        <form action="{{ route('dashboard') }}" method="GET">
                          @csrf
                          <button type="submit" class="btn btn-md btn-danger btn-rounded d-flex justify-content-center shadow">
                              <i class="mdi mdi-backburger my-auto"></i>
                              Kembali
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        @yield('main-content-body')
                      </div>
                    </div>

                  </div>
                </div>
              </div>
                {{-- @yield('main-content-body') --}}
              <br>
              <br>
              <br>
              <br>
            {{-- </div> --}}
          {{-- </div> --}}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        {{-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer> --}}
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> --}}

  <script src="{{ asset('panel/template') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('panel/template') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('panel/template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('panel/template') }}/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('panel/template') }}/js/off-canvas.js"></script>
  <script src="{{ asset('panel/template') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('panel/template') }}/js/template.js"></script>
  <script src="{{ asset('panel/template') }}/js/settings.js"></script>
  <script src="{{ asset('panel/template') }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('panel/template') }}/js/dashboard.js"></script>
  <script src="{{ asset('panel/template') }}/js/Chart.roundedBarCharts.js"></script>
  <script src="{{ asset('assets/datatables') }}/datatables.min.js"></script>
  {{-- <script src="{{ asset('assets/materialize') }}/js/materialize.min.js"></script> --}}
  <!-- End custom js for this page-->

{{-- <script type="text/javascript">
  $('#logoutModal1').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script> --}}
<script>
  // $('#myModal').on('shown.bs.modal', function () {
  //   $('#myInput').trigger('focus')
  // })
</script>

  @stack('js')

</body>

</html>

