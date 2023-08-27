<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>LOGIN</title>
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
      <!-- calendar file css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0')}}/js/semantic.min.css" />
      <!--[if lt IE 9]>
      
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img src="{{asset('pluto-1.0.0')}}/images/logo/imigrasi_logo.png" alt="#" />
                        <img src="{{asset('pluto-1.0.0')}}/images/logo/kemenkumham_logo.png" alt="#" />
                     </div>
                     <div>
                        <h3>Aplikasi Pengarsipan Dokumen Paspor</h3>
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="POST" action="{{route('staf.login')}}">
                        @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">username</label>
                              <input type="text" name="username" placeholder="username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" type="submit">Log In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('pluto-1.0.0')}}/js/jquery.min.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/popper.min.js"></script>
      <script src="{{asset('pluto-1.0.0')}}/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{asset('pluto-1.0.0')}}/js/animate.js"></script>
      <!-- select country -->
      <script src="{{asset('pluto-1.0.0')}}/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('pluto-1.0.0')}}/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('pluto-1.0.0')}}/js/custom.js"></script>
   </body>
</html>