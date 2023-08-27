@php
    use App\Models\Karyawan;

    $karyawan = Karyawan::where('id_users', Auth::user()->id)->first();
@endphp

<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="{{ asset('storage/profil/'.$karyawan->profil) }}"></div>
             <div class="user_info">
                <h6></h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
            <ul class="list-unstyled components">
                <!--ini untuk dashboard-->
                <li class="active">
                    <a href="{{ route('admin.dashboard')}}"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                </li>
                <!--ini untuk dashboard-->

                <!--ini untuk tambah akun staff-->
                <li>
                    <a href="{{ route('admin.tambahstaff')}}"><i class="fa fa-plus orange_color"></i> <span>Tambah Akun</span></a>
                </li>
                <!--ini untuk tambah akun staff-->

                <!--ini untuk tabel staff-->
                <li>
                    <a href="{{ route('admin.tabelstaff')}}"><i class="fa fa-table purple_color2"></i> <span>Data Karyawan</span></a>
                </li>
                <!--ini untuk tabel staff-->

                <!--ini untuk tabel arsip dokumen paspor-->
               
                <!--ini untuk tabel arsip dokumen paspor-->

                <!--ini untuk tabel arsip paspor-->
                <li>
                    <a href="{{ route('admin.tabelpaspor')}}"><i class="fa fa-table green_color"></i> <span>Data Arsip Paspor</span></a>
                </li>
                <!--ini untuk tabel arsip paspor-->

                <!--ini untuk laporan-->
                
                <!--ini untuk laporan-->
            </ul>
    </div>
</nav>