@extends('admin.layout.base')
@section('title', 'EditStaf')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Edit Data Staf</h2>
       </div>
    </div>
</div>


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
                                            <h3>Data Staf</h3>
                                        </div>
                                        <!--crud data-->
                                        <form method="POST" action="{{ route('admin.update', $staf->id) }}" id="formEdit" enctype="multipart/form-data">

                                           
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Nama">Nama</label>
                                                    <input type="text" class="form-control" name="Nama" id="Nama" value="{{$staf->Nama}}">
                                                    @error('Nama')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="NIP">NIP</label>
                                                    <input type="text" class="form-control" name="NIP" id="NIP" value="{{$staf->NIP}}">
                                                    @error('NIP')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Jabatan">Jabatan</label>
                                                    <input type="text" class="form-control" name="Jabatan" id="Jabatan" value="{{$staf->Jabatan}}">
                                                    @error('Jabatan')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Tempat_Lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="Tempat_Lahir" id="=Tempat_Lahir" value="{{$staf->Tempat_Lahir}}">
                                                    @error('Tempat_Lahir')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control datetimepicker-input" name="Tanggal_Lahir" id="Tanggal_Lahir" value="{{$staf->Tanggal_Lahir}}">
                                                    @error('Tanggal_Lahir')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Agama" class="form-label">Agama</label>
                                                    <select name="Agama" id="Agama" class="form-select">
                                                        <option value="Islam" {{$staf->Agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                        <option value="Protestan" {{$staf->Agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                                                        <option value="Katolik" {{$staf->Agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                                        <option value="Hindu" {{$staf->Agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                        <option value="Buddha" {{$staf->Agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                                        <option value="Konghucu" {{$staf->Agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>

                                                                                

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                <label for="Jenis_Kelamin">Jenis Kelamin</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" name="Jenis_Kelamin" id="laki_laki" class="" value="Laki-Laki" {{ $staf->Jenis_Kelamin == 'Laki-Laki' ? 'checked' : ''}}>
                                                    <label for="laki_laki" class="mt-1">Laki-Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" name="Jenis_Kelamin" id="perempuan" class="" value="Perempuan" {{ $staf->Jenis_Kelamin == 'Perempuan' ? 'checked' : ''}}>
                                                    <label for="perempuan" class="mt-1">Perempuan</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Alamat">Alamat</label>
                                                    <input type="text" class="form-control" name="Alamat" id="Alamat" value="{{$staf->Alamat}}"></input>
                                                    @error('Alamat')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="No_HP">No HP</label>
                                                    <input type="text" class="form-control" name="No_HP" id="No_HP" value="{{$staf->No_HP}}">
                                                    @error('No_HP')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" value="{{$staf->email}}">
                                                    @error('email')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="username">Foto Profil</label>
                                                    <input type="file" class="form-control" name="profil" id="profil" value="{{$staf->profil}}">
                                                    @if($staf->profil)
                                                    <img src="{{ asset('storage/profil/' . $staf->profil) }}" alt="Foto Paspor" width="100">
                                                    @endif
                                                    @error('profil')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="role" class="form-label">role</label>
                                                    <select name="role" id="role" class="form-select">
                                                        <option value="admin" {{ $staf->role  == 'admin' ? 'selected':'' }}>Admin</option>
                                                        <option value="staff" {{ $staf->role  == 'staff' ? 'selected':'' }}>Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button type="button" class="main_bt" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">Simpan</button>
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
</div>
    

<!-- Modal Konfirmasi -->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-labelledby="modalKonfirmasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKonfirmasiLabel">Konfirmasi Simpan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menyimpan perubahan?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="formEdit">Simpan</button>
            </div>
        </div>
    </div>
</div>


@endsection