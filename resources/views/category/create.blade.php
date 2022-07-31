@extends('layouts/main')
@section('title', 'Tambah Kategori')
@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Form Tambah Kategori</h3>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <form action="/category" method="post">
                    @csrf
                    <div class="mb-3 col-lg-6">
                        <label for="class" class="form-label">Kelas</label>
                        <select class="form-select" id="select" name="class">
                            <option selected>Open this select menu</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="major" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="major" id="major" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fa fa-save"></i>&nbsp;Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagescript')
<script>
    $("select").select2({
        theme: "bootstrap-5",
    });
</script>
@endsection