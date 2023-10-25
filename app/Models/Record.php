<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'health_cond',
        'temperature',
    ];

    // fungsi patientfunc ini dipakai pada records/index.blade.php untuk menampilkan field nama (pasien) dari tabel patients
    public function patientfunc(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    // fungsi doctorfunc ini dipakai pada records/index.blade.php untuk menampilkan field nama (dokter) dari tabel doctors
    public function doctorfunc(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
