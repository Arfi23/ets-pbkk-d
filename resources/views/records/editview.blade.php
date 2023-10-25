<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center mt-5 mb-5">Edit Record</h2>
    <form method="post" action="{{route('record.update', ['record' => $record])}}">
        @csrf
        @method('put')
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="patient_id" class="form-label">Pasien</label>
                    <select type="text" class="form-control" id="patient_id" name="patient_id">
                        <option value="">- Pasien -</option>
                        @foreach ($pastientid as $patientopt)
                        <option value="{{$patientopt->id}}" {{ $patientopt->id == $record->patient_id ? 'selected' : '' }}>{{$patientopt->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="doctor_id" class="form-label">Dokter</label>
                    <select type="text" class="form-control" id="doctor_id" name="doctor_id">
                        <option value="">- Dokter -</option>
                        @foreach ($doctorid as $doctoropt)
                        <option value="{{$doctoropt->id}}" {{ $doctoropt->id == $record->doctor_id ? 'selected' : '' }}>{{$doctoropt->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="temperature" class="form-label">Suhu Tubuh</label>
                    <input type="number" class="form-control" id="temperature" name="temperature" value="{{$record->temperature}}">
                </div>
                <div class="mb-3">
                    <label for="health_cond" class="form-label">Kondisi Kesehatan</label>
                    <textarea class="form-control" id="health_cond" rows="3" name="health_cond">{{$record->health_cond}}</textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Update Rekam</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>