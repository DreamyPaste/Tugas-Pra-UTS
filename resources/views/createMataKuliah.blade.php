<div>
<div>
    <form method="post" action="@if(isset($matakuliah))
        {{ route('matakuliah.update', ['id' => $matakuliah['id']]) }}
    @else
        {{ route('matakuliah.create') }}
    @endif">
        @csrf
        @if(isset($matakuliah))
            <input type="hidden" name="_method" value="put" />
        @endif


        <table border="1" bgcolor="black">
            <tr>
                <td colspan=6 align="center"><h1><font color="white">
                @if(isset($matakuliah))
                    Update MataKuliah
                @else
                    Create MataKuliah
                @endif</font></h1></td>
            </tr>
            <tr>
                <td><font color="white">Kode_MK</font></td>
                <td colspan=5><input type="text" name="kode_mk" size="55" value="{{ $matakuliah['kode_mk'] ?? ''}}"></td>
            </tr>
            <tr>
                <td><font color="white">Nama_MK</font></td>
                <td colspan=5><input type="text" name="nama_mk" size="55" value="{{ $matakuliah['nama_mk'] ?? ''}}"></td>
            </tr>
            <tr>
                <td><font color="white">Jurusan</font></td>
                <td colspan=5>
                    <input type="radio" name="jurusan" value="Bisnis Digital"
                    @if (($mata_kuliah['jurusan'] ?? 'Bisnis Digital') == "Bisnis Digital")
                    checked
                    @endif><font color="white">Bisnis Digital</font><br>
                    <input type="radio" name="jurusan" value="Kewirausahaan"
                    @if (($mata_kuliah['jurusan'] ?? 'Bisnis Digital') == "Kewirausahaan")
                    checked
                    @endif><font color="white">Kewirausahaan</font><br>
                    <input type="radio" name="jurusan" value="Sistem dan Teknologi Informasi"
                    @if (($mata_kuliah['jurusan'] ?? 'Bisnis Digital') == "Sistem dan Teknologi Informasi")
                    checked
                    @endif><font color="white">Sistem dan Teknologi Informasi</font><br>
                </td>
            </tr>
            <tr>
                <td><font color="white">Semester</font></td>
                <td colspan=5><input type="text" name="semester" size="55" value="{{ $matakuliah['matakuliah'] ?? ''}}"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="Create"></td>
                <td colspan="3" align="center"><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</div>


</div>