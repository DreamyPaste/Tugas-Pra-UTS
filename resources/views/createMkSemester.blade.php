
<div>
<div>
    <form method="post" action="@if(isset($mksemester))
        {{ route('mksemester.update', ['id' => $mksemester['id']]) }}
    @else
        {{ route('mksemester.create') }}
    @endif">
        @csrf
        @if(isset($mksemester))
            <input type="hidden" name="_method" value="put" />
        @endif


        <table border="1" bgcolor="black">
            <tr>
                <td colspan=6 align="center"><h1><font color="white">
                @if(isset($mksemester))
                    Update MkSemester
                @else
                    Create MkSemester
                @endif</font></h1></td>
            </tr>
            <tr>
                <td><font color="white">Mahasiswa_ID</font></td>
                <td colspan=5><input type="text" name="mahasiswa_id" size="55" value="{{ $mksemester['mahasiswa_id'] ?? ''}}"></td>
            </tr>
            <tr>
                <td><font color="white">MK_ID</font></td>
                <td colspan=5><input type="text" name="mk_id" size="55" value="{{ $mksemester['mk_id'] ?? ''}}"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="Create"></td>
                <td colspan="3" align="center"><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</div>


</div>