<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #3b3f4d;
            color: #fff:
        }
        center{
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <center>Laporan Data Siswa</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ID Kelas</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>ID Ekstra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $no => $sw)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $sw -> Kelas->id_kelas }}</td>
                <td>{{ $sw -> nama_siswa }}</td>
                <td>{{ $sw -> alamat }}</td>
                <td>{{ $sw -> tanggal_lahir }}</td>
                <td>{{ $sw -> jenis_kelamin }}</td>
                <td>{{ $sw -> Ekstra->id_ekstrakurikuler }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>