@extends('staf.layout.base')
@section('title', 'DetailArsipPaspor')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page_title">
           <h2>Detail Data Arsip Paspor</h2>
        </div>
     </div>

</div>
<div class="row column1">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>Data Arsip Paspor</h2>
                    </div>
                </div>
                <div class="full price_table padding_infor_info">
                    <div class="row">
                        <!-- user profile section --> 
                        <!-- profile image -->
                        <div class="col-lg-12">
                        <div class="full dis_flex center_text">
                            <div class="profile_contant">
                                <div class="judul">
                                    <h3>Data Pemohon</h3>
                                </div>
                                    <!--tabel biodata-->
                                    <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{$paspors->pemohon->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NIK</td>
                                                    <td>{{$paspors->pemohon->NIK}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Lahir</td>
                                                    <td>{{$paspors->pemohon->tempat_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>{{$paspors->pemohon->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>{{$paspors->pemohon->Agama}}</td>
                                                </tr> 
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{$paspors->pemohon->Jenis_Kelamin}}</td>
                                                </tr>        
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{$paspors->pemohon->Alamat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Pembuatan Paspor Baru</td>
                                                    <td>{{$paspors->tgl_pembuatan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Habis Berlaku</td>
                                                    <td>{{$paspors->tgl_habis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Paspor</td>
                                                    <td>{{$paspors->no_paspor}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Pengarsipan</td>
                                                    <td>{{$paspors->no_arsip}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Foto Halaman Paspor</td>
                                                    <td> 
                                                        
                                                        <img src="{{ asset('storage/fotopaspor/' . $paspors->foto_paspor) }} " style="width: 300px; height: auto; border: 1px solid black;"
                                                        alt="ini foto">
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Foto KTP</td>
                                                    <td><img src="{{ asset('storage/fotoktp/' . $paspors->foto_ktp) }} " style="width: 300px; height: auto; border: 1px solid black;"
                                                        alt="ini foto"></td>
                                                </tr>
                                                <tr>
                                                    <td>Foto KK</td>
                                                    <td><img src="{{ asset('storage/fotokk/' . $paspors->foto_kk) }} " style="width: 300px; height: auto; border: 1px solid black;"
                                                        alt="ini foto"></td>
                                                </tr>
                                                <tr>
                                                    <td>Foto Akte</td>
                                                    <td><img src="{{ asset('storage/fotoakte/' . $paspors->foto_akte) }} " style="width: 300px; height: auto; border: 1px solid black;"
                                                        alt="ini foto"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <!--tabel biodata-->
                                    <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <a href="{{route('staf.editpemohon', $paspors->id)}}" class="btn main_bt">Edit Data Pemohon</a>
                                    <a href="{{route('staf.editpaspor', $paspors->id)}}" class="btn main_bt">Edit Data Paspor</a>
                                    <a href="{{route('staf.tabelpaspor')}}" class="btn main_bt">Tutup</a>
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