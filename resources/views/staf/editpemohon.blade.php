@extends('staf.layout.base')
@section('title', 'EditPemohon')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Edit Arsip Pemohon</h2>
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
                                            <h3>Data Arsip Pemohon</h3>
                                        </div>
                                        <!--crud data-->
                                        <form action="{{ route('staf.updatepemohon', $pemohon->id)}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama') ?? $pemohon->nama }}">
                                                    @error('nama')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="NIK">NIK</label>
                                                    <input type="text" class="form-control" name="NIK" id="NIK" value="{{old('NIK') ?? $pemohon->NIK}}">
                                                    @error('NIK')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{old('tempat_lahir') ?? $pemohon->tempat_lahir}}">
                                                    @error('tempat_lahir')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{old('tanggal_lahir') ?? $pemohon->tanggal_lahir}}">
                                                    @error('tanggal_lahir')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                <label for="Agama" class="form-label">Agama</label>
                                                <select name="Agama" id="Agama" class="form-select">
                                                    <option value="Islam" {{$pemohon->Agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="Protestan" {{$pemohon->Agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                                                    <option value="Katolik" {{$pemohon->Agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                                    <option value="Hindu" {{$pemohon->Agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="Buddha" {{$pemohon->Agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                                    <option value="Konghucu" {{$pemohon->Agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                <label for="Jenis_Kelamin">Jenis Kelamin</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" name="Jenis_Kelamin" id="laki_laki" class="" value="Laki-Laki" {{ $pemohon->Jenis_Kelamin == 'Laki-Laki' ? 'checked' : ''}}>
                                                    <label for="laki_laki" class="mt-1">Laki-Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" name="Jenis_Kelamin" id="perempuan" class="" value="Perempuan" {{ $pemohon->Jenis_Kelamin == 'Perempuan' ? 'checked' : ''}}>
                                                    <label for="perempuan" class="mt-1">Perempuan</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="Alamat">Alamat</label>
                                                    <input type="text" class="form-control" name="Alamat" id="Alamat" value="{{old('Alamat') ?? $pemohon->Alamat}}"></input>
                                                    @error('Alamat')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button type="submit" class="main_bt" href="">Simpan</button>
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
    


@endsection