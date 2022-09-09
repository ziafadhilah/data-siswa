<table align="center">
    <tr>
        <th align="center" colspan="22">
            <b>
                <h3>SMK Negeri 2 Bandung</h3>
            </b>
        </th>
    </tr>
    <tr>
        <th align="center" colspan="22"><b>Data Siswa</b></th>
    </tr>
</table>
<table>
    <thead>
        <tr>
            <th style="background-color: yellow; text-align:center;"><b>No</b></th>
            <th><b>Nama Peserta Didik</b></th>
            <th><b>NISN</b></th>
            <th><b>Tempat, Tanggal Lahir</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Agama</b></th>
            <th><b>Status Dalam Keluarga</b></th>
            <th><b>Anak Ke</b></th>
            <th><b>Alamat Peserta Didik</b></th>
            <th><b>No. Tlp Peserta Didik</b></th>
            <th><b>Sekolah Asal</b></th>
            <th><b>Diterima di Sekolah ini</b></th>
            <th><b>Nama Ayah</b></th>
            <th><b>Nama Ibu</b></th>
            <th><b>Alamat Orang Tua</b></th>
            <th><b>No. Tlp Orang Tua</b></th>
            <th><b>Pekerjaan Ayah</b></th>
            <th><b>Pekerjaan Ibu</b></th>
            <th><b>Nama Orang Tua Wali</b></th>
            <th><b>Alamat Orang Tua Wali</b></th>
            <th><b>No. Tlp Orang Tua Wali</b></th>
            <th><b>Pekerjaan Orang Tua Wali</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td style="background-color: yellow; width:25px; text-align:center;">{{$loop->iteration}}</td>
            <td>{{$student->name ?? "-"}}</td>
            <td>{{$student->nisn ?? "-"}}</td>
            <td>{{$student->birth_location}}, {{$student->birthday ?? "-"}}</td>
            <td>{{$student->gender ?? "-"}}</td>
            <td>{{$student->religion ?? "-"}}</td>
            <td>{{$student->status ?? "-"}}</td>
            <td>{{$student->child_order ?? "-"}}</td>
            <td>{{$student->address_1 ?? "-"}}</td>
            <td>{{$student->telephone_1 ?? "-"}}</td>
            <td>{{$student->original_school ?? "-"}}</td>
            <td>{{$student->category->class}}-{{$student->category->major ?? "-"}}</td>
            <td>{{$student->father ?? "-"}}</td>
            <td>{{$student->mother ?? "-"}}</td>
            <td>{{$student->address_2 ?? "-"}}</td>
            <td>{{$student->telephone_2 ?? "-"}}</td>
            <td>{{$student->father_occupation ?? "-"}}</td>
            <td>{{$student->mother_occupation ?? "-"}}</td>
            <td>{{$student->guardian ?? "-"}}</td>
            <td>{{$student->address_3 ?? "-"}}</td>
            <td>{{$student->telephone_3 ?? "-"}}</td>
            <td>{{$student->guardian_occupation ?? "-"}}</td>
        </tr>
        @endforeach
    </tbody>
</table>