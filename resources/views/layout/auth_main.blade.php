
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{$title}} - Madeliya-gift </title>
  <!-- plugins:css -->
  <!-- <link rel="stylesheet" href="{{ asset('starAdmin/vendors/feather/feather.css') }}"> -->
  <!-- {{-- https://pictogrammers.github.io/@mdi/font/3.2.89/ --}} -->
  <!-- <link rel="stylesheet" href="{{ asset('starAdmin/vendors/mdi/css/materialdesignicons.min.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('starAdmin/vendors/ti-icons/css/themify-icons.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('starAdmin/vendors/typicons/typicons.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('starAdmin/vendors/simple-line-icons/css/simple-line-icons.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('starAdmin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css --> 
  <!-- <link rel="stylesheet" href="{{ asset('starAdmin/css/vertical-layout-light/style.css') }}"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('img/logo/01.png') }}"> 
  <!-- <link rel="shortcut icon" href="{{ asset('starAdmin/images/favicon.png') }}">  -->
  {{-- css tBootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  {{-- icon getBootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Style -->
  {{-- My style CSS --}}
  <link href="css/mystyle.css" rel="stylesheet">
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      @yield('container')
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- <script src="{{ asset('starAdmin/vendors/js/vendor.bundle.base.js') }}"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- <script src="{{ asset('starAdmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script> -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <!-- <script src="{{ asset('starAdmin/js/off-canvas.js') }}"></script> -->
  <!-- <script src="{{ asset('starAdmin/js/hoverable-collapse.js') }}"></script> -->
  <!-- <script src="{{ asset('starAdmin/js/template.js') }}"></script>
  <script src="{{ asset('starAdmin/js/settings.js') }}"></script> -->
  <!-- <script src="{{ asset('starAdmin/js/todolist.js') }}"></script> -->
  <!-- endinject -->
</body>

</html>
