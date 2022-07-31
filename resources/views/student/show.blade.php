@extends('layouts/main')
@section('title', 'Tambah Siswa')
@section('container')
<div class="container mt-5">
    <div class="card col-lg-12">
        <div class="card-header">
            <h3> Detail Siswa : {{$student->name}}</h3>
        </div>
        <div class="card-body col-lg-12">
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Nama Lengkap
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->name}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Nomor Induk Siswa Nasional
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->nisn}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Tempat, Tgl.Lahir
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->birth_location}},&nbsp;{{$student->birthday}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Jenis Kelamin
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->gender}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Agama
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->religion}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Status Dalam Keluarga
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->status}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Anak Ke
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->child_order}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Alamat Peserta Didik
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->address_1}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            No Telepon Peserta Didik
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->telephone_1}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Sekolah Asal
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->original_school}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12 mb-2">
                        <div class="col-lg-3">
                            Diterima di Sekolah ini
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">{{$student->category->class}}-{{$student->category->major}}</div>
                    </div>
                </li>
            </ul>
            <div class="alert alert-success text-dark">
                <h3>Data Orang Tua</h3>
            </div>
            <ul class="list-group mb-3">
                <li class="list-group-item col-lg-12">
                    <div class="col-lg-12 mb-1">
                        Nama Orang Tua
                    </div>
                    <div class="row col-lg-12 mb-2">
                        <div class="col-lg-3">Ayah</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">{{$student->father}}</div>
                    </div>
                    <div class="row col-lg-12">
                        <div class="col-lg-3">Ibu</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">{{$student->mother}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Alamat Orang Tua
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->address_2}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Nomor Telepon Orang Tua
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->telephone_2}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item col-lg-12">
                    <div class="col-lg-12 mb-1">
                        Pekerjaan Orang Tua
                    </div>
                    <div class="row col-lg-12 mb-2">
                        <div class="col-lg-3">Ayah</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">{{$student->father_occupation}}</div>
                    </div>
                    <div class="row col-lg-12">
                        <div class="col-lg-3">Ibu</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">{{$student->mother_occupation}}</div>
                    </div>
                </li>
            </ul>
            <div class="alert alert-success text-dark">
                <h3>Data Orang Tua Wali</h3>
            </div>
            <ul class="list-group mb-3">
                <li class="list-group-item col-lg-12">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Nama Orang Tua Wali
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->guardian ?? '-'}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Alamat Orang Tua Wali
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->address_3 ?? '-'}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Nomor Telepon Orang Tua Wali
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->telephone_3 ?? '-'}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row col-lg-12">
                        <div class="col-lg-3">
                            Pekerjaan Orang Tua Wali
                        </div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-8">
                            {{$student->guardian_occupation ?? '-'}}
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection