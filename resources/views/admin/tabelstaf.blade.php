@extends('admin.layout.base')
@section('title', 'TabelStaff')
@section('content')
<!-- untuk kata dashboard -->
<div class="row">
    <div class="col-md-12">
        <div class="page_title">
            <h2>Data Tabel Karyawan</h2>
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

                    <label class="label_field hidden">hidden label</label>
                    <a href="{{ route('admin.tambahstaff')}}" class="btn main_bt">Tambah Akun</a>
                </div>
                <table class="table" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Detail</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($staffs as $staff)
                        <tr>
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->user->username }}</td>
                            <td>{{ $staff->Nama }}</td>
                            <td>{{ $staff->NIP }}</td>
                            <td>{{ $staff->Jabatan }}</td>

                            <td>
                                <a href="{{route('admin.show', $staff->id)}}" class="btn btn-info btn-sm">Detail</a>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $staff->id }}">Hapus</button>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $staff->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel{{ $staff->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $staff->id }}">Konfirmasi
                                                    Hapus</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data karyawan "{{ $staff->Nama }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <form action="{{route('admin.destroy', $staff->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Delete Modal -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
<!-- untuk kata dashboard -->
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
@endsection
