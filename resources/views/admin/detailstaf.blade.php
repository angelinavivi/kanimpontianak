@extends('admin.layout.base')
@section('title', 'DetailStaff')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page_title">
           <h2>Detail Data Staf</h2>
        </div>
     </div>

</div>
<div class="row column1">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>Profil Staff</h2>
                    </div>
                </div>
                <div class="full price_table padding_infor_info">
                    <div class="row">
                        <!-- user profile section --> 
                        <!-- profile image -->
                        <div class="col-lg-12">
                        <div class="full dis_flex center_text">
                            <div class="profile_img"> <img src="{{ $staf->foto_profil }} " style="width:180px;" class="rounded-circle"
                                alt="ini foto"></div>
                            <div class="profile_contant">
                                <div class="contact_inner">
                                    <h3>{{$staf->Nama}}</h3>
                                    <!--tabel biodata-->
                                    <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                        <tbody>
                                            
                                            <tr>
                                                <td>Username</td>
                                                <td>{{$staf->user->username}}</td>
                                            </tr>
                                            <tr>
                                                <td>NIP</td>
                                                <td>{{$staf->NIP}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td>{{$staf->Jabatan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td>{{$staf->Tempat_Lahir}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>{{$staf->Tanggal_Lahir}}</td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td>{{$staf->Agama}}</td>
                                            </tr> 
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>{{$staf->Jenis_Kelamin}}</td>
                                            </tr>        
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{$staf->Alamat}}</td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td>{{$staf->No_HP}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{$staf->email}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Foto Profil</td>
                                                <td><img src="{{ asset('storage/profil/' . $staf->profil) }} " style="width: 300px; height: auto; border: 1px solid black;"
                                                    alt="ini foto">
                                                </td>
                                            </tr> --}}
                                            <tr>
                                                <td>role</td>
                                                <td>{{$staf->role}}</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <!--tabel biodata-->
                                    <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <a href="{{route('admin.editstaf', $staf->id)}}" class="btn main_bt">Edit Data Staff</a>
                                    <a href="{{route('admin.editakun', $staf->id)}}" class="btn main_bt">Edit Akun</a>
                                    <a href="{{route('admin.tabelstaff')}}" class="btn main_bt">Tutup</a>
                                    
                                    </div>

                                    
                                </div>
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

@endsection