@extends('admin.layout.base')
@section('title', 'TambahStaff')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Tambah Akun Staf</h2>
       </div>
    </div>
</div>

<div class="row column1">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="white_shd full margin_bottom_30">
                <div class="full price_table padding_infor_info">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="full dis_flex center_text">
                                <div class="profile_contant">
                                        <div class="judul">
                                            <h3>Data Staff</h3>
                                        </div>
                                        <!--crud data-->
                                        <form method="POST" action="{{ route('admin.storestaf') }}" enctype="multipart/form-data" onsubmit="showSuccessPopup()">
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
                                                    <label for="profil">Foto Profil</label>
                                                    <input type="file" class="form-control" name="profil" id="profil" value="{{old('profil')}}">
                                                    @error('profil')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="role" class="form-label">role</label>
                                                    <select name="role" id="role" class="form-select" value="{{ old('role') }}">
                                                        <option value="staff" {{ old('role')  == 'staff' ? 'selected':'' }}>Staff</option>
                                                        <option value="admin" {{ old('role')  == 'admin' ? 'selected':'' }}>Admin</option>
                                                    </select>
                                                </div>
                                            </div>
  
                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button type="submit" class="main_bt">Simpan</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
</div>

<!-- Modal Success -->
{{-- <div class="modal fade" id="success-popup" tabindex="-1" aria-labelledby="success-popup-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="success-popup-label">Data Berhasil Disimpan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data Anda telah berhasil ditambahkan.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> --}}

{{-- <script>
    function showSuccessPopup() {
        var successModal = new bootstrap.Modal(document.getElementById('success-popup'));
        successModal.show();
        setTimeout(function() {
            successModal.hide();
        }, 3000);
    }
</script> --}}
@endsection