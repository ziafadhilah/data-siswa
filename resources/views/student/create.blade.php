@extends('layouts/main')
@section('title', 'Tambah Siswa')
@section('container')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div class="card-header bg-primary text-white">
                <h4>Form Tambah Data Siswa</h4>
            </div>
            <form class="mt-1" method="post" action="/student">
                @csrf
                <div class="row col-md-12 mt-3 mb-2">
                    <div class="col-md-6">
                        <label for="nisn" class="form-label">Nomor Induk Siswa Nasional (NISN)</label>
                        <input type="number" class="form-control" name="nisn" id="nisn" placeholder="NISN" required autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12 bg-white mt-2 mb-2">Tempat Tanggal Lahir</div>
                <div class="row col-md-12 mt-2">
                    <div class="col-md-4  mb-2">
                        <div class="input-group">
                            <span class="input-group-text">Tempat</span>
                            <input name="birth_location" type="text" class="form-control" placeholder="Contoh : Jakarta" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Lahir</span>
                            <input type="date" class="form-control" name="birthday" id="birthday" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="input-group">
                            <span class="input-group-text">Jenis Kelamin</span>
                            <select name="gender" id="inputState" class="form-select" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-4 mb-2">
                        <label for="religion" class="form-label">Agama</label>
                        <select class="form-select" id="select" name="religion">
                            <option selected>Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="child_order" class="form-label">Anak Ke</label>
                        <input type="number" name="child_order" class="form-control" id="child_order" placeholder="0" required autocomplete="off">
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" name="status" class="form-control" id="status" placeholder="Contoh : Anak Kandung" required autocomplete="off">
                    </div>
                    <div class="col-md-3">
                        <label for="telephone_1" class="form-label">No Telepon</label>
                        <input type="number" name="telephone_1" class="form-control" id="telephone_1" required autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="col-md-6 mt-2">
                        <label for="address_1" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address_1" name="address_1" placeholder="Alamat Siswa" required autocomplete="off"></textarea>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="original_school" class="form-label">Sekolah Asal</label>
                        <input type="text" name="original_school" class="form-control" id="original_school" placeholder="Sekolah Asal" required autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="col-md-6">
                        <label for="class" class="form-label">Diterima di sekolah ini</label>
                        <select class="form-select" id="select" name="category_id" required>
                            <option selected> -- 0 --</option>
                            @foreach($getCategory as $gc)
                            <option value="{{$gc->id}}">{{$gc->class}}-{{$gc->major}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-header bg-primary text-white mt-3">
                        <h4>Form Tambah Data Orang Tua Siswa</h4>
                    </div>
                    <label class="mb-2 mt-2" style="color: red;">
                        <h5>*Isi dengan (-) jika siswa bersama wali</h5>
                    </label>
                    <div class="col-md-6 mb-1">
                        <label for="father" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="father" id="father" placeholder="Nama Lengkap Ayah" required autocomplete="off">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="mother" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="mother" id="mother" placeholder="Nama Lengkap Ibu" required autocomplete="off">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="address_2" class="form-label">Alamat Orang Tua</label>
                        <textarea class="form-control" id="address_2" name="address_2" placeholder="Alamat Orang Tua" required></textarea>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="father_occupation" class="form-label">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" name="father_occupation" id="father_occupation" placeholder="Pekerjaan Ayah" required autocomplete="off">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="mother_occupation" class="form-label">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" name="mother_occupation" id="mother_occupation" placeholder="Pekerjaan Ibu" required autocomplete="off">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="telephone_2" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" name="telephone_2" id="telephone_2" placeholder="Masukan Nomor Telepon" required autocomplete="off">
                    </div>
                </div>
                <button class="accordion-button collapsed bg-primary text-white mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h4>Form Tambah Data Wali Siswa</h4>
                </button>
                <div id="collapseOne" class="accordion-collapse collapse mb-3" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-body">
                            <div class="col-md-6">
                                <label for="guardian" class="form-label">Nama Wali Siswa</label>
                                <input type="text" class="form-control" name="guardian" id="guardian" placeholder="Nama Lengkap Wali" autocomplete="off">
                            </div>
                            &nbsp;
                            <div class="col-md-6">
                                <label for="address_3" class="form-label">Alamat Wali Siswa</label>
                                <textarea class="form-control" id="address_3" name="address_3" placeholder="Alamat Wali"></textarea>
                            </div>
                            &nbsp;
                            <div class="col-md-6">
                                <label for="guardian_occupation" class="form-label">Pekerjaan Wali</label>
                                <input type="text" class="form-control" name="guardian_occupation" id="guardian_occupation" placeholder="Pekerjaan Wali" autocomplete="off">
                            </div>
                            &nbsp;
                            <div class="col-md-4">
                                <label for="telephone_3" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" name="telephone_3" id="telephone_3" placeholder="Masukan Nomor Telepon" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <label class="mt-3 mb-3" style="color: red;">*Harap di periksa kembali, apakah data sudah sesuai atau belum!</label>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('pagescript')
<script>
    $("select").select2({
        theme: "bootstrap-5",
        class: "col-md-4 mb-2",
    });
</script>
@endsection