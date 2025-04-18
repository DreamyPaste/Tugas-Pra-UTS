<div style="margin: 20px;">
    <a href="{{ route('mksemester.create-form') }}">
        <button type="button" style="margin-bottom: 15px;">Add Mahasiswa & Mata Kuliah</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; background-color: #333; color: white; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #222;">
                <th style= "color: white";>ID</th>
                <th style= "color: white";>ID Mahasiswa</th>
                <th style= "color: white";>ID MK</th>
                <th style= "color: white";>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mk_semester as $item)
                <tr>
                    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $item->id }}</td>
                    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $item->mahasiswa_id }}</td>
                    <td style="color: #62aed6; padding: 10px 10px 10px 0;">{{ $item->mk_id }}</td>
                    <td style="color: #62aed6; padding: 10px 10px 10px 0;">
                        <a href="{{ route('mksemester.update-form', ['id' => $item->id]) }}">
                            <button type="button">Edit</button>
                        </a>
                        <form method="POST" action="{{ route('mksemester.delete', ['id' => $item->id]) }}" style="display: inline;">
                        @csrf
                            <input type="hidden" name="_method" value="delete" />
                            <input type="submit" value="Delete">
                        </form>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($mk_semester->isEmpty())
                <tr>
                    <td colspan="6" style="text-align: center; color: #aaa;">Data belum tersedia</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
