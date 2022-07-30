@extends('layouts/main')
@section('title', 'Daftar Kategori')
@section('container')
<div class="container mt-3">
    <a href="/category/create" class="btn btn-outline-success mb-2"><i class="fa fa-plus"></i> Tambah</a>
    <div class="card mt-3">
        <div class="card-body">
            <table class="table mt-3" id="category-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $categories)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$categories->major}}</td>
                        <td>{{$categories->class}}</td>
                        <td>
                            <a href="/category/edit/{{$categories->id}}">Edit</a>
                            <a href="">Delete</a>
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
        $('#category-table').DataTable({
            // paging: false,
            bInfo: false,
        });
    });
</script>
@endsection