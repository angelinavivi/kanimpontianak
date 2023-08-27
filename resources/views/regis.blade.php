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
      <title>REGISTRASI ADMIN</title>
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
      <!--[if lt IE 9]>
      
      <![endif]-->
   </head>
   <body >
    
        
        
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            
            <!--sidebar-->

            <!--content-->
            
               <!--navbar-->
               
               
               <!-- dashboard inner -->
               
                  <div class="container-fluid">
                     
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_contant">
                                                <div class="judul">
                                                    <h3>REGISTRASI ADMIN</h3>
                                                </div>
                                                <!--crud data-->
                                                <form method="POST" action="{{ route('admin.storeadmin') }}" >
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}">
                                                            @error('username')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="NIP">Password</label>
                                                            <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
                                                            @error('password')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="Nama">Nama</label>
                                                            <input type="text" class="form-control" name="Nama" id="Nama" value="{{old('Nama')}}">
                                                            @error('Nama')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="NIP">NIP</label>
                                                            <input type="text" class="form-control" name="NIP" id="NIP" value="{{old('NIP')}}">
                                                            @error('NIP')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="Jabatan">Jabatan</label>
                                                            <input type="text" class="form-control" name="Jabatan" id="Jabatan" value="{{old('Jabatan')}}">
                                                            @error('Jabatan')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="Tempat_Lahir">Tempat Lahir</label>
                                                            <input type="text" class="form-control" name="Tempat_Lahir" id="=Tempat_Lahir" value="{{old('Tempat_Lahir')}}">
                                                            @error('Tempat_Lahir')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="Tanggal_Lahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control datetimepicker-input" name="Tanggal_Lahir" id="Tanggal_Lahir" value="{{old('Tanggal_Lahir')}}">
                                                            @error('Tanggal_Lahir')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="Agama" class="form-label">Agama</label>
                                                            <select name="Agama" id="Agama" class="form-select" value="{{ old('Agama') }}">
                                                                <option value="Islam" {{ old('Agama')  == 'Islam' ? 'selected':'' }}>Islam</option>
                                                                <option value="Protestan" {{ old('Agama')  == 'Kristen' ? 'selected':'' }}>Kristen</option>
                                                                <option value="Katolik" {{ old('Agama')  == 'Katolik' ? 'selected':'' }}>Katolik</option>
                                                                <option value="Hindu" {{ old('Agama') == 'Hindu' ? 'selected':'' }}>Hindu</option>
                                                                <option value="Buddha" {{ old('Agama') == 'Buddha' ? 'selected':'' }}>Buddha</option>
                                                                <option value="Konghucu" {{ old('Agama') == 'Konghucu' ? 'selected':'' }}>Konghucu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                        <label for="Jenis_Kelamin">Jenis Kelamin</label>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" name="Jenis_Kelamin" id="laki_laki" class="" value="Laki-Laki" {{ old('Jenis_Kelamin') == 'Laki-Laki' ? 'checked' : ''}}>
                                                            <label for="laki_laki" class="mt-1">Laki-Laki</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" name="Jenis_Kelamin" id="perempuan" class="" value="Perempuan" {{ old('Jenis_Kelamin') == 'Perempuan' ? 'checked' : ''}}>
                                                            <label for="perempuan" class="mt-1">Perempuan</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="Alamat">Alamat</label>
                                                            <input type="text" class="form-control" name="Alamat" id="Alamat" value="{{old('Alamat')}}"></input>
                                                            @error('Alamat')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="No_HP">No HP</label>
                                                            <input type="text" class="form-control" name="No_HP" id="No_HP" value="{{old('No_HP')}}">
                                                            @error('No_HP')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
                                                            @error('email')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="username">Foto Profil</label>
                                                            <input type="text" class="form-control" name="profil" id="profil" value="{{old('profil')}}">
                                                            @error('profil')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="role" class="form-label">role</label>
                                                            <select name="role" id="role" class="form-select" value="{{ old('role') }}">
                                                                <option value="admin" {{ old('role')  == 'admin' ? 'selected':'' }}>Admin</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-row">
                                                        <div class="col-md-8">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
                                                            @error('password')
                                                            <div class="alert alert-warning">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="form-row">
                                                        <div class="col-md-8" class="custom-file">
                                                            <label for="foto">Foto Profil</label><br>
                                                            <input type="file" id="profi" name="profil" accept="image/*" required><br><br>
                                                        </div>
                                                    </div> --}}
                                                    <div class="field margin_0">
                                                        <label class="label_field hidden">hidden label</label>
                                                        <button type="submit" class="main_bt" href="{{ route('login')}}">Simpan</button>
                                                        </div>
                                                    </div>
                                            </form>
                                                
                                          </div>
                                       </div>
                                       <!-- profile contant section -->
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- footer -->
                     
                  </div>
                  <!-- end dashboard inner -->
              
            
            <!--content-->
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
   </body>
</html>
