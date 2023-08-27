
@extends('staf.layout.base')
@section('title', 'EditPaspor')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Edit Arsip Paspor</h2>
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
                                        <form action="{{ route('staf.updatepaspor', $paspor->id)}}" method="POST" enctype="multipart/form-data">
                                            {{-- @method('PUT') --}}
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tgl_pembuatan">Tanggal Pembuatan</label>
                                                    <input type="date" class="form-control" name="tgl_pembuatan" id="tgl_pembuatan" value="{{ old('tgl_pembuatan') ?? $paspor->tgl_pembuatan }}">
                                                    @error('tgl_pembuatan')
                                                    <div class="alert alert-warning">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tgl_habis">Tanggal Habis Berlaku</label>
                                                    <input type="date" class="form-control" name="tgl_habis" id="tgl_habis" value="{{old('tgl_habis') ?? $paspor->tgl_habis}}">
                                                    @error('tgl_habis')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="no_paspor">Nomor Paspor</label>
                                                    <input type="text" class="form-control" name="no_paspor" id="no_paspor" value="{{old('no_paspor') ?? $paspor->no_paspor}}">
                                                    @error('no_paspor')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="no_arsip">Nomor Arsip</label>
                                                    <input type="text" class="form-control" name="no_arsip" id="no_arsip" value="{{old('no_arsip') ?? $paspor->no_arsip}}">
                                                    @error('no_paspor')
                                                    <div class="alert alert-warning">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_paspor">Foto Halaman Paspor</label>
                                                    <input type="file" class="form-control" name="foto_paspor" id="foto_paspor">
                                                    @if($paspor->foto_paspor)
                                                    <img src="{{ asset('storage/fotopaspor/' . $paspor->foto_paspor) }}" alt="Foto Paspor" width="100">
                                                    @endif
                                                    @error('foto_paspor')
                                                    <div class="alert alert-warning">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_ktp">Foto KTP</label>
                                                    <input type="file" class="form-control" name="foto_ktp" id="foto_ktp">
                                                    @if($paspor->foto_ktp)
                                                        <div>
                                                            <img src="{{ asset('storage/fotoktp/' . $paspor->foto_ktp) }}" alt="Foto KTP" width="100">
                                                        </div>
                                                    @endif
                                                    @error('foto_ktp')
                                                        <div class="alert alert-warning">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_kk">Foto KK</label>
                                                    <input type="file" class="form-control" name="foto_kk" id="foto_kk">
                                                    @if($paspor->foto_kk)
                                                        <div>
                                                            <img src="{{ asset('storage/fotokk/' . $paspor->foto_kk) }}" alt="Foto KK" width="100">
                                                        </div>
                                                    @endif
                                                    @error('foto_kk')
                                                        <div class="alert alert-warning">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="foto_akte">Foto Akte</label>
                                                    <input type="file" class="form-control" name="foto_akte" id="foto_akte">
                                                    @if($paspor->foto_akte)
                                                        <div>
                                                            <img src="{{ asset('storage/fotoakte/' . $paspor->foto_akte) }}" alt="Foto Akte" width="100">
                                                        </div>
                                                    @endif
                                                    @error('foto_akte')
                                                        <div class="alert alert-warning">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            

                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button type="submit" class="main_bt" href="">Simpan</button>
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