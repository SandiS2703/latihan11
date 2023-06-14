<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <center>
            <h3>DAFTAR GAME TERSEDIA</h3>
        </center>
        <table class="table table-bordered" style="border: 2px">
            <thead>
                <tr>
                    <th scope="col">Kode Game</th>
                    <th scope="col">Nama Game</th>
                    <th scope="col">Kategori Game</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($game as $pro)
                    <tr>
                        <td>{{ $pro->id_game }}</td>
                        <td>{{ $pro->nama }}</td>
                        <td>{{ $pro->id_kategori }}</td>
                        <td>{{ $pro->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
