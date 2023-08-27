@php
    use App\Models\Karyawan;
    
    $karyawan = Karyawan::where('id_users', Auth::user()->id)->first();
@endphp

<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="{{ asset('storage/profil/' . $karyawan->profil) }}">
                </div>
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
                <a href="{{ route('staf.dashboard') }}"><i class="fa fa-dashboard yellow_color"></i>
                    <span>Dashboard</span></a>
            </li>
            <!--ini untuk dashboard-->


            <!--ini untuk tambah arsip dokumen paspor-->

            <!--ini untuk tambah arsip paspor-->
            <li>
                <a href="{{ route('staf.tambahpaspor') }}"><i class="fa fa-plus purple_color"></i> <span>Tambah
                        Arsip</span></a>
            </li>
            <!--ini untuk tambah arsip paspor-->



            <!--ini untuk tabel arsip paspor-->
            <li>
                <a href="{{ route('staf.tabelpaspor') }}"><i class="fa fa-table green_color"></i> <span>Data Arsip
                        Paspor</span></a>
            </li>
            <!--ini untuk tabel arsip paspor-->


        </ul>
    </div>
</nav>
