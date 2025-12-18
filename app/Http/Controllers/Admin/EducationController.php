<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::orderBy('order')->get();

        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'degree'            => 'required|string|max:255',
            'institution'       => 'required|string|max:255',
            'description'       => 'nullable|string',
            'start_date'        => 'required|date',
            'end_date'          => 'nullable|date|after_or_equal:start_date',
            'is_current'        => 'sometimes|boolean',
            'location'          => 'nullable|string|max:255',
            'institution_logo'  => 'nullable|image|max:2048',
            'grade'             => 'nullable|string|max:255',
            'order'             => 'nullable|integer',
        ]);

        if ($request->hasFile('institution_logo')) {
            $validated['institution_logo'] = $request->file('institution_logo')->store('education', 'public');
        }

        $validated['is_current'] = $request->boolean('is_current');

        Education::create($validated);

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $education = Education::findOrFail($id);

        return view('admin.educations.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $education = Education::findOrFail($id);

        return view('admin.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $education = Education::findOrFail($id);

        $validated = $request->validate([
            'degree'            => 'required|string|max:255',
            'institution'       => 'required|string|max:255',
            'description'       => 'nullable|string',
            'start_date'        => 'required|date',
            'end_date'          => 'nullable|date|after_or_equal:start_date',
            'is_current'        => 'sometimes|boolean',
            'location'          => 'nullable|string|max:255',
            'institution_logo'  => 'nullable|image|max:2048',
            'grade'             => 'nullable|string|max:255',
            'order'             => 'nullable|integer',
        ]);

        if ($request->hasFile('institution_logo')) {
            $validated['institution_logo'] = $request->file('institution_logo')->store('education', 'public');
        }

        $validated['is_current'] = $request->boolean('is_current');

        $education->update($validated);

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education record deleted successfully.');
    }
}
