@extends('admin.layout.base')
@section('title', 'TabelDokumen')
@section('content')
<!--untuk kata dashboard-->
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Data Tabel Dokumen</h2>
       </div>
    </div>
    
    <div class="container-fluid">
        <div class="white_shd full">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Tanggal Pengambilan Paspor Baru</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>   
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 <!--untuk kata dashboard-->

@endsection