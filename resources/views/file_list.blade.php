<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar File</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Daftar File</h3>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered text-center align-middle">

                <thead class="table-dark">
                    <tr>
                        <th width="80">No</th>
                        <th>Foto</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($files as $index => $file)

                    <tr style="vertical-align: middle;">

                        <td>{{ $index + 1 }}</td>

                        <td>
                            <img
                                src="{{ Storage::url($file) }}"
                                class="img-thumbnail"
                                style="width:100px; height:100px; object-fit:cover;">
                        </td>

                        <td>
                            <form action="{{ route('files.delete', basename($file)) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>

                            </form>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="3">Belum ada file.</td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>