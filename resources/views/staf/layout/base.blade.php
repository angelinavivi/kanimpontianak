<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <title>Pengarsipan | @yield('title')</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{asset('pluto-1.0.0')}}/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/css/custom.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   </head>
   <body class="dashboard dashboard_1">
        <div class="full_container">
            <div class="inner_container">
                <!-- Sidebar  -->
                @include('staf.layout.sidebar')
                <!--sidebar-->

                <!--content-->
                <div id="content">
                    
                <!--navbar-->
                @include('staf.layout.navbar')
               
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <section class="content">
                    </section>
                    <div class="container-fluid">
                        @yield('content')

                     <!--untuk kata dashboard-->
                        
                        <!--untuk kata dashboard-->

                        

                        <!-- grafik -->
                        
                        <!-- grafik -->

                       
                        <!--footer-->
                        
                        <!--footer-->
                    </div>
                    @include('staf.layout.footer')
                </div>
            </div>
            <!--content-->  
             
        </div>    
                        

<!-- jQuery -->
@include('sweetalert::alert')
<script src="{{asset('pluto-1.0.0')}}/js/jquery.min.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/popper.min.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{asset('pluto-1.0.0')}}/js/animate.js"></script>
      <!-- select country -->
      <script src="{{asset('pluto-1.0.0')}}/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="{{asset('pluto-1.0.0')}}/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="{{asset('pluto-1.0.0')}}/js/Chart.min.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/Chart.bundle.min.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/utils.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('pluto-1.0.0')}}/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('pluto-1.0.0')}}/js/custom.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/chart_custom_style1.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      @yield('js')


      <script>
         $(document).ready(function() {
             $('#modalKonfirmasiLogout').on('show.bs.modal', function (event) {
                 // Jika modal akan ditampilkan, lakukan sesuatu di sini
             });
      
             $('#modalKonfirmasiLogout').on('hide.bs.modal', function (event) {
                 // Jika modal akan disembunyikan, lakukan sesuatu di sini
             });
         });
      </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

      
   </body>
</html>
