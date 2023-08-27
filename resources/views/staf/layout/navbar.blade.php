@php
    use App\Models\Karyawan;

    $karyawan = Karyawan::where('id_users', Auth::user()->id)->first();
@endphp

<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
       <div class="full">
          <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
          <div class="logo_section">
             <img class="img-responsive" src="{{asset('pluto-1.0.0')}}/images/logo/imigrasi_logo.png" alt="#" />
          </div>
          <div class="right_topbar">
             <div class="icon_info">
                <ul class="user_profile_dd">
                   <li>
                     <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('storage/profil/'.$karyawan->profil) }}"><span class="name_user">{{ $karyawan->Nama }}</span></a>
                      <div class="dropdown-menu">
                         <a class="dropdown-item" href="{{route('staf.detailprofil')}}">My Profile</a>
                         <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalKonfirmasiLogout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>z
    </nav>
</div>


<div class="modal fade" id="modalKonfirmasiLogout" tabindex="-1" aria-labelledby="modalKonfirmasiLogoutLabel" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="modalKonfirmasiLogoutLabel">Konfirmasi Log Out</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
           </div>
           <div class="modal-body">
               Apakah Anda yakin ingin keluar?
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <a href="{{ route('staf.logout') }}" class="btn btn-primary">Log Out</a>
           </div>
       </div>
   </div>
</div>

