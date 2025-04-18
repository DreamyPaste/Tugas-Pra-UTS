
<div>    
    <a href={{ route('matakuliah.create-form') }}><button type="button">Add Mata Kuliah</button></a>
    <br>
    <table border=1 style="background-color: black;">
        <tr>
            <th style="color: white;">ID</th>
            <th style="color: white;">Kode_MK</th>
            <th style="color: white;">Nama_MK</th>
            <th style="color: white;">Jurusan</th>
            <th style="color: white;">Semester</th>
            <th style="color: white;">Action</th>
        </tr>
        @foreach ($mata_kuliah as $matakuliah)
<tr>
    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $matakuliah->id }}</td>
    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $matakuliah->kode_mk }}</td>
    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $matakuliah->nama_mk }}</td>
    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $matakuliah->jurusan }}</td>
    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $matakuliah->semester }}</td>
    <td style="color: #62aed6; padding: 10px 10px 10px 0;">
        <a href="{{ route('matakuliah.update-form', ['id' => $matakuliah->id]) }}">
            <button type="button">Edit</button>
        </a>
        <form method="post" action="{{ route('matakuliah.delete', ['id' => $matakuliah->id]) }}">
            @csrf
            <input type="hidden" name="_method" value="delete" />
            <input type="submit" value="Delete">
        </form>
    </td>
</tr>
@endforeach

@if ($mata_kuliah->isEmpty())
                <tr>
                    <td colspan="6" style="text-align: center; color: #aaa;">Data belum tersedia</td>
                </tr>
            @endif

    </table>
</div>
