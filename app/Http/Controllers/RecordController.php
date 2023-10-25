<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('records.index', ['records' => $records]);
    }

    // addview == create
    public function addview()
    {
        $patientid = Patient::all();
        $doctorid = Doctor::all();
        return view('records.addview', compact('patientid', 'doctorid'));
    }

    // add == store
    public function add(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'health_cond' => 'required',
            'temperature' => 'required|numeric|between:35.0,45.5',
        ]);

        $newRecord = Record::create($data);

        return redirect(route('record.index'))->with('success', '');
    }
}
