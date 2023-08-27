@extends('admin.layout.base')
@section('title', 'TabelPaspor')
@section('content')
<!--untuk kata dashboard-->
<div class="row">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Data Tabel Paspor</h2>
       </div>
    </div>
    
    <div class="container-fluid">
        <div class="white_shd full">
            @if($errors->any())
               @foreach($errors as $error)
                  <h1>{{$error}}</h1>
               @endforeach
            @endif
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                   <table class="table" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Tanggal Habis Berlaku</th>
                            <th>Nomor Paspor</th>
                            <th>Nomor Arsip</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                         
                     @foreach($paspors as $paspor)
                        <tr>
                           <td>{{ $paspor->pemohon->id }}</td>
                           <td>{{ $paspor->pemohon->nama }}</td>
                           <td>{{ $paspor->pemohon->NIK }}</td>
                           <td>{{ $paspor->pemohon->tempat_lahir }}</td>
                           <td>{{ $paspor->pemohon->tanggal_lahir }}</td>
                           <td>{{ $paspor->pemohon->Agama }}</td>
                           <td>{{ $paspor->pemohon->Jenis_Kelamin }}</td>
                           <td>{{ $paspor->pemohon->Alamat }}</td>
                           <td>{{ $paspor->tgl_pembuatan }}</td>
                           <td>{{ $paspor->tgl_habis }}</td>
                           <td>{{ $paspor->no_paspor }}</td>
                           <td>{{ $paspor->no_arsip }}</td>
                           
                           <td>
                              <a href="{{route('admin.showpaspor', $paspor->id)}}" class="btn btn-info btn-sm">Detail</a>
                           </td>
                           {{-- <td>
                              <form action="{{route('paspor.destroypaspor', $paspor->id)}}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                              </form>
                           </td> --}}
                           {{-- <td>
                              <a href="{{route('staf.editstaf', $staffs->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td> --}}
                        </tr>
                     @endforeach
                   
               </tbody>
                    


                        
                        
                        
                   </table>
                   {{-- {{ $staffs->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
        
    
    </div>
    
</div>
 <!--untuk kata dashboard-->

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  $('#dataTable').DataTable();
</script>
@endsection