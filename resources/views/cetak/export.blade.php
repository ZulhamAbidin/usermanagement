<table>
    <thead>
        <tr>
            <th>No</th>
            <th>nama_lengkap</th>
            <th>jenis_kelamin</th>
            <th>alamat_domisili</th>
            <th>pendidikan_terakhir</th>
            <th>jurusan</th>
            <th>tanggal</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1 @endphp
        @foreach ($cetakPertanggal as $key=>$value)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $value->nama_lengkap }}</td>
            <td>{{ $value->jenis_kelamin }}</td>
            <td>{{ $value->alamat_domisili }}</td>
            <td>{{ $value->pendidikan_terakhir }}</td>
            <td>{{ $value->jurusan }}</td>
            <td>{{ $value->hari }}</td>
        </tr>
        @endforeach
    </tbody>
</table>