<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pemain</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain}}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>



