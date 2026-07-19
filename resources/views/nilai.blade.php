<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }

        .container{
            width:700px;
            margin:40px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0px 0px 10px rgba(0,0,0,.15);
        }

        h2{
            text-align:center;
            color:#0d6efd;
        }

        .info{
            margin-bottom:20px;
            font-size:18px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#0d6efd;
            color:white;
            padding:10px;
        }

        table td{
            padding:10px;
            border:1px solid #ddd;
            text-align:center;
        }

        table tr:nth-child(even){
            background:#f2f2f2;
        }
    </style>

</head>
<body>

<div class="container">

    <h2>Data Nilai Mahasiswa</h2>

    <div class="info">
        <strong>Nama Mahasiswa :</strong>
        {{ $mahasiswa->nama }}
    </div>

    <table>

        <tr>
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
        </tr>

        @foreach($mahasiswa->nilais as $index=>$nilai)

        <tr>

            <td>{{ $index+1 }}</td>

            <td>{{ $nilai->matakuliah->nama }}</td>

            <td>{{ $nilai->nilai }}</td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>