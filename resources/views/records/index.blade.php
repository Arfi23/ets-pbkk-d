<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Rekam Medis</h1>
    <div>
        <table class="table table-bordered mx-auto align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Pasien</th>
                    <th scope="col">Dokter</th>
                    <th class="text-center" scope="col">Kondisi Kesehatan</th>
                    <th class="text-center" scope="col">Suhu Tubuh</th>
                </tr </thead>
            <tbody>
                <!-- Loop untuk setiap catatan, variabel $records berasal dari RecordController -->
                @foreach($records as $note)
                <tr>
                    <th scope="row">{{$note->id}}</th>
                    <td>{{$note->patient->nama}}</td> <!-- patient->nama, patient merupakan nama fungsi di model Record.php, nama merupakan nama field dari tabel patients di DB-->
                    <td>{{$note->doctor->nama}}</td> <!-- doctor->nama, doctor merupakan nama fungsi di model Record.php, nama merupakan nama field dari tabel doctors di DB-->
                    <td>{{$note->health_cond}}</td>
                    <td>{{$note->temperature}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>