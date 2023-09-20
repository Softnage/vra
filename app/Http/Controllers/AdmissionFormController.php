<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionForm;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AdmissionFormController extends Controller
{
    public function index()
    {
        $admissionForms = AdmissionForm::all();
        return view('admission_forms.index', compact('admissionForms'));
    }

    public function create()
    {
        return view('admission_forms.create');
    }

    public function store(Request $request)
    {

        $file = $request->file('file');
        $filePath = $file->store('admission_forms', 'public');
        
        AdmissionForm::create([
            'file_path' => $filePath,
        ]);

        return redirect()->route('admission-forms.index')
            ->with('success', 'Admission form uploaded successfully');
    }

    public function edit(AdmissionForm $admissionForm)
    {
        return view('admission_forms.edit', compact('admissionForm'));
    }

    public function update(Request $request, AdmissionForm $admissionForm)
    {

        if ($request->hasFile('file')) {
            // Delete the old admission form file from storage
            Storage::disk('public')->delete($admissionForm->file_path);

            // Store the newly uploaded PDF file
            $file = $request->file('file');
            $filePath = $file->store('admission_forms', 'public');

            $admissionForm->update([
                'file_path' => $filePath,
            ]);
        }

        return redirect()->route('admission-forms.index')
            ->with('success', 'Admission form updated successfully');
    }

    public function destroy(AdmissionForm $admissionForm)
    {
        // Delete the admission form file from storage
        Storage::disk('public')->delete($admissionForm->file_path);

        // Delete the admission form record from the database
        $admissionForm->delete();

        return redirect()->route('admission-forms.index')
            ->with('success', 'Admission form deleted successfully');
    }

}