@extends('staf.layout.base')
@section('title', 'TambahPaspor')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Tambah Arsip Paspor</h2>
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
                                            <h3>Data Arsip Paspor</h3>
                                        </div>
                                        <!--crud data-->
                                        <form action="{{ route('staf.storepaspor')}}" method="POST" enctype="multipart/form-data" id="formTambah">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}">
                                                    @error('nama')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="NIK">NIK</label>
                                                    <input type="text" class="form-control" name="NIK" id="NIK" value="{{old('NIK')}}">
                                                    @error('NIK')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{old('tempat_lahir')}}">
                                                    @error('tempat_lahir')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                                                    @error('tanggal_lahir')
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
                                                    <label for="tgl_pembuatan">Tanggal Pembuatan</label>
                                                    <input type="date" class="form-control" name="tgl_pembuatan" id="tgl_pembuatan" value="{{old('tgl_pembuatan')}}">
                                                    @error('tgl_pembuatan')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tgl_habis">Tanggal Habis Berlaku</label>
                                                    <input type="date" class="form-control" name="tgl_habis" id="tgl_habis" value="{{old('tgl_habis')}}">
                                                    @error('tgl_habis')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="no_paspor">Nomor Paspor</label>
                                                    <input type="text" class="form-control" name="no_paspor" id="no_paspor" value="{{old('no_paspor')}}">
                                                    @error('no_paspor')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="no_arsip">Nomor Arsip</label>
                                                    <input type="text" class="form-control" name="no_arsip" id="no_arsip" value="{{old('no_arsip')}}">
                                                    @error('no_paspor')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_paspor">Foto Halaman Paspor</label>
                                                    <input type="file" class="form-control" name="foto_paspor" id="foto_paspor" value="{{old('foto_paspor')}}">
                                                    @error('foto_paspor')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_ktp">Foto KTP</label>
                                                    <input type="file" class="form-control" name="foto_ktp" id="foto_ktp" value="{{old('foto_ktp')}}">
                                                    @error('foto_ktp')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_kk">Foto KK</label>
                                                    <input type="file" class="form-control" name="foto_kk" id="foto_kk" value="{{old('foto_kk')}}">
                                                    @error('foto_kk')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_akte">Foto Akte</label>
                                                    <input type="file" class="form-control" name="foto_akte" id="foto_akte" value="{{old('foto_akte')}}">
                                                    @error('foto_akte')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            

                                           

                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button type="button" class="main_bt" data-toggle="modal" data-target="#Modal">Simpan</button>
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
    
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Konfirmasi Simpan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menyimpan data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="formTambah">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection