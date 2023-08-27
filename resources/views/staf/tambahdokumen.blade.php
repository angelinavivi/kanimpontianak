@extends('staf.layout.base')
@section('title', 'TambahDokumen')
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Tambah Arsip Dokumen Paspor</h2>
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
                                            <h3>Data Arsip Dokumen</h3>
                                        </div>
                                        <!--crud data-->
                                        <form action="">
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="nip">NIK</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tempatlahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tanggallahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                <label for="Agama">Agama</label>
                                                <select class="custom-select">
                                                    <option selected>--Agama--</option>
                                                    <option value="1">Islam</option>
                                                    <option value="2">Protestan</option>
                                                    <option value="3">Katolik</option>
                                                    <option value="1">Buddha</option>
                                                    <option value="2">Hindu</option>
                                                    <option value="3">Konghucu</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                <label for="jeniskelamin">Jenis Kelamin</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea type="text" class="form-control"></textarea>
                                                </div>
                                                
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <label for="tglpengambilan">Tanggal Pengambilan Paspor</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-8" class="custom-file">
                                                    <label for="foto">Scan KTP</label><br>
                                                    <input type="file" id="foto" name="foto" accept="image/*" required><br><br>
                                                </div>
                                                <div class="col-md-8" class="custom-file">
                                                    <label for="foto">Scan KK</label><br>
                                                    <input type="file" id="foto" name="foto" accept="image/*" required><br><br>
                                                </div>
                                                <div class="col-md-8" class="custom-file">
                                                    <label for="foto">Scan Ijazah/Buku Nikah/Akta Kelahiran</label><br>
                                                    <input type="file" id="foto" name="foto" accept="image/*" required><br><br>
                                                </div>
                                            </div>

                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button type="submit" class="main_bt" href="{{ url('/staff') }}">Simpan</button>
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