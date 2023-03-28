<!DOCTYPE html>
<html>
<head>
	<title>Cetak pengaduan</title>
    </head>
<body>
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
      </style>
    <center>
        <h3> Laporan pengaduan masyarakat</h3>
        <br>
    </center>
    <div class="container">
        <center>
            <table class="static" cellspacing="0" cellpadding="17" align="center" rules="all" style="width: 95;">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Tanggal Pengaduan</th>
                         <th>Nik</th>
                         <th>Nama </th>
                         <th>Isi Laporan</th>
                         <th>Foto</th>
                         <th>Status</th>

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
                             <td>{{ $p->Status }}</td>

                         </tr>
                     @endforeach
                 </tbody>
             </table>
     <center>
    </div>
</body>
</html>