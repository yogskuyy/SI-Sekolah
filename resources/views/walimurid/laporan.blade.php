<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Wali Murid</title>
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
    <center>Laporan Data Wali Murid</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ID Walimurid</th>
                <th>ID Siswa</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($walimurid as $no => $sw)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $sw -> id_walimurid }}</td>
                <td>{{ $sw -> id_siswa }}</td>
                <td>{{ $sw -> nama_walimurid }}</td>
                <td>{{ $sw -> alamat }}</td>
                <td>{{ $sw -> no_hp }}</td>
                <td>{{ $sw -> keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>