<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ url('asset/img/logo.jpg')}}">
    <title>Data Pegawai</title>
    <link href="{{ url('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom fonts for this template -->
  <link href="{{url('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->


  <link href="{{url('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

  <link href="asset/css/select2.min.css" rel="stylesheet" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="group">
                <div class="mr-2 text-primary">
                <img src="asset/img/logo-lg.png" alt="logo" width="40%" height="40%" >&nbsp; &nbsp; &nbsp; <a href="http://127.0.0.1:8000/" style="text-decoration: none; color:#5F5F5F;"> <i class="fa fa-home"></i> Home</a>
                &nbsp; &nbsp; <a href="{{ route('pegawai.index') }}" style="text-decoration: none; color:#5F5F5F;"><i class="fa fa-user"></i> Data Pegawai</a>
                </div>
              </div>
          </form>

          <ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->


<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->

    <span class="mr-3 d-none d-lg-inline text-danger"><strong >{{ Carbon\Carbon::now()->translatedFormat('l, d F Y')}}</strong></span>
  <!-- Dropdown - User Information -->



        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- DataTales Example -->
          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

  <!-- Scroll to Top Button -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  

  <!-- Bootstrap core JavaScript-->
 <script src="{{url('asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('asset/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{url('asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <script src="{{url('asset/js/demo/datatables-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script rc="{{ asset('js/app.js') }}"></script>

  @stack('scripts')
</body>

</html>
