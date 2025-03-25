<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = \App\Models\Activity::all();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date_format:Y-m-d\TH:i',
            'paid' => 'nullable|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $activity = new \App\Models\Activity();
        $activity->type = $validatedData['type'];
        $activity->user_id = $validatedData['user_id'];
        $activity->datetime = $validatedData['datetime'];
        $activity->paid = $validatedData['paid'] ?? false;
        $activity->notes = $validatedData['notes'];
        $activity->satisfaction = $validatedData['satisfaction'];

        $activity->save();

        return redirect()->route('activities.index')->with('success', 'Actividad creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = \App\Models\Activity::findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = \App\Models\Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = \App\Models\Activity::findOrFail($id);

        $validatedData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date_format:Y-m-d\TH:i',
            'paid' => 'nullable|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $activity->type = $validatedData['type'];
        $activity->user_id = $validatedData['user_id'];
        $activity->datetime = $validatedData['datetime'];
        $activity->paid = $validatedData['paid'] ?? false;
        $activity->notes = $validatedData['notes'];
        $activity->satisfaction = $validatedData['satisfaction'];

        $activity->save();

        return redirect()->route('activities.index')->with('success', 'Actividad actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = \App\Models\Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Actividad eliminada exitosamente.');
    }
}
