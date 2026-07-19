<!DOCTYPE html>
<html>
<head>
    <title>Halaman Usia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3>Halaman Khusus Pengguna Berusia 18 Tahun ke Atas</h3>
        </div>

        <div class="card-body">

            <table class="table">
                <tr>
                    <th width="150">Nama</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>

                <tr>
                    <th>Role</th>
                    <td>{{ Auth::user()->role }}</td>
                </tr>

                <tr>
                    <th>Usia</th>
                    <td>{{ Auth::user()->usia }} Tahun</td>
                </tr>
            </table>

            <a href="{{ route('home') }}" class="btn btn-primary">
                Kembali ke Home
            </a>

        </div>
    </div>

</div>

</body>
</html>