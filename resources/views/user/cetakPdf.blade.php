<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data User</title>
    <style>
        .container {
            width: 70%;
        }
        table, th, td {
            border: .01rem solid;
        }
        td {
            padding: 2px
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <center>
        <h4>Data User</h4>
    </center>
    <br/>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Level</th>
                    <th>Alamat</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kode Pos</th>
                    <th>Provinsi</th>
                    <th>Kota/Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan/Desa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $i => $p)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $p->nik}}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->telp }}</td>
                        <td>{{ $p->jenkel }}</td>
                        <td>{{ $p->level }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->rt }}</td>
                        <td>{{ $p->rw }}</td>
                        <td>{{ $p->kode_pos}}</td>
                        <td>{{ $p->province_id}}</td>
                        <td>{{ $p->regency_id}}</td>
                        <td>{{ $p->district_id}}</td>
                        <td>{{ $p->village_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>