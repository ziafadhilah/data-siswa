@extends('layouts/main')
@section('title', 'Daftar Siswa')
@section('container')
<div class="container mt-3">
    <a href="/student/create" class="btn btn-outline-success mb-2"><i class="fa fa-plus"></i> Tambah</a>
    <div class="card mt-3">
        <div class="card-header">
            <h3>Daftar Siswa</h3>
        </div>
        <div class="card-body">
            <table class="table mt-3" id="student-table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $s)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$s->nisn}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->category->class}}</td>
                        <td>{{$s->category->major}}</td>
                        <td>
                            <a href="/student/edit/{{$s->id}}" class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/student/show/{{$s->id}}" class="btn btn-outline-success btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form action=" /student/{{$s->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('pagescript')
<script>
    $(document).ready(function() {
        $('#student-table').DataTable({
            // paging: false,
            bInfo: false,
        });
    });
</script>
@endsection