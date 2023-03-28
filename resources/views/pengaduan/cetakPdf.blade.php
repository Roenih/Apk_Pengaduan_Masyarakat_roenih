<!DOCTYPE html>
<html>
<head>
	<title>Cetak pengaduan</title>
    <style>
    table.static{
        position: relative;
        border: 1px solid #543535;
    }
  </style>
</head>
<body>
    <center>
        <h4>Data pengaduan</h4>
    </center>
    <br/>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Nik</th>
                    <th>Nama </th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduan as $i => $p)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $p->tgl_pengaduan}}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->nama  }}</td>
                        
                        <td>{{ $p->isi_laporan }}</td>
                        <td><img src="{{ public_path ('image/'. $p->foto )}}" width="100" height="50" alt""></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>