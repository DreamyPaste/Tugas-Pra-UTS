
<div>    
    <a href={{ route('mahasiswa.create-form') }}><button type="button">Add Mahasiswa</button></a>
    <br>
    <table border=1 style="background-color: black;">
        <tr>
            <th style="color: white;">ID</th>
            <th style="color: white;">NIM</th>
            <th style="color: white;">Nama</th>
            <th style="color: white;">Tempat Lahir</th>
            <th style="color: white;">Tanggal Lahir</th>
            <th style="color: white;">Jurusan</th>
            <th style="color: white;">Angkatan</th>
            <th style="color: white;">Action</th>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['id']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['NIM']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['name']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['tempat_lahir']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['tanggal_lahir']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['jurusan']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{$mahasiswa['angkatan']}}</td>
            <td style="color: #62aed6; padding: 10px 10px 10px 0;">
                <a href={{ route('mahasiswa.update-form', ['id' => $mahasiswa['id']]) }}><button type="button">Edit</button></a>
                <form method="post" action="{{ route('mahasiswa.delete', ['id' => $mahasiswa['id']]) }}">
                    @csrf
                    <input type="hidden" name="_method" value="delete" />
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach

        @if ($mahasiswa->isEmpty())
                <tr>
                    <td colspan="6" style="text-align: center; color: #aaa;">Data belum tersedia</td>
                </tr>
            @endif
    </table>
</div>
