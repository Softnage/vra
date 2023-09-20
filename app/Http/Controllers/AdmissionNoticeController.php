<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionNotice;

class AdmissionNoticeController extends Controller
{
    public function index()
    {
        $admissionNotices = AdmissionNotice::all();
        return view('admission_notices.index', compact('admissionNotices'));
    }

    public function create()
    {
        return view('admission_notices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        AdmissionNotice::create($request->all());

        return redirect()->route('admission-notices.index')
            ->with('success', 'Admission notice created successfully');
    }

    public function show(AdmissionNotice $admissionNotice)
    {
        return view('admission_notices.show', compact('admissionNotice'));
    }

    public function edit(AdmissionNotice $admissionNotice)
    {
        return view('admission_notices.edit', compact('admissionNotice'));
    }

    public function update(Request $request, AdmissionNotice $admissionNotice)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $admissionNotice->update($request->all());

        return redirect()->route('admission-notices.index')
            ->with('success', 'Admission notice updated successfully');
    }

    public function destroy(AdmissionNotice $admissionNotice)
    {
        $admissionNotice->delete();

        return redirect()->route('admission-notices.index')
            ->with('success', 'Admission notice deleted successfully');
    }
}