@extends('staf.layout.base')
@section('title', 'DetailArsipDokumen')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page_title">
           <h2>Detail Data Arsip Dokumen</h2>
        </div>
     </div>

</div>
<div class="row column1">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>Data Arsip Dokumen</h2>
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
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>NIK</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Lahir</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td></td>
                                                </tr> 
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td></td>
                                                </tr>        
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Pengambilan Paspor Baru</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <!--tabel biodata-->
                                    <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt">Edit</button>
                                    <button class="main_bt">Tutup</button>
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