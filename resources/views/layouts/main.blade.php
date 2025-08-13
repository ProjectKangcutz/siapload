<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - SIUPLOAD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('niceAdmin//img/favicon.png')}}" rel="icon">
  <link href="{{asset('niceAdmin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('niceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('niceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('niceAdmin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('niceAdmin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('niceAdmin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('niceAdmin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
 

  <!-- Template Main CSS File -->
  <link href="{{asset('niceAdmin/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  * Developed by : Bayu
  ======================================================== -->

  <!-- Webcam JS Script -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
   <link href="{{asset('niceAdmin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <script src="{{asset('js/webcam.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('js/bootstrap.min.css')}}" />
  <style type="text/css">
    @font-face /*perintah untuk memanggil font eksternal*/
    {
      font-family: 'Lovelo'; /*memberikan nama bebas untuk font*/
      src: url({{asset('lovelo/Lovelo-Black.woff')}});/*memanggil file font eksternalnya di folder nexa*/
    }

    #results { padding:20px; border:1px solid; background:#ccc; }
  </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="{{asset('logodoang3.png')}}" alt="">
        <span class="d-none d-lg-block" style="font-family: Lovelo;">SIUPLOAD</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>End Search Bar -->

    <nav class="header-nav ms-auto">
      @include('layouts.header')
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    @include('layouts.sidebar')
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      @yield('top-content')
    </div><!-- End Page Title -->
    <section class="section dashboard">
      @yield('content')
    </section>
  </main><!-- End #main -->

  @include('layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('niceAdmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('niceAdmin/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('niceAdmin/assets/js/main.js')}}"></script>

</body>

</html>
