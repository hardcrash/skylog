<?php

namespace App\Http\Controllers;

use App\Models\Drone;
use App\Http\Requests\StoreDroneRequest;
use App\Http\Requests\UpdateDroneRequest;
use Illuminate\Http\JsonResponse;

class DroneController extends Controller
{

    public function index()
    {

        $drones = auth()->user()->drones()->orderBy('registration_num')->get();

        // Returns the view, making $drones available
        return view('drone.index', compact('drones'));
    }

     // Show the form for creating a new resource.
    public function create()
    {
        // Return the view 'resources/views/drones/create.blade.php'
        return view('drone.create');
    }


    public function store(StoreDroneRequest $request)
    {
        $validated = $request->validated();
        // Automatically link the drone to the currently authenticated user
        $validated['users_id'] = auth()->id();

        Drone::create($validated);

        // Redirect to the index page with a success flash message
        return redirect()->route('drone.index')->with('success', 'Drone created successfully!');
    }


    public function show(Drone $drone)
    {
        // Use Gates/Policies (or simple check) to ensure ownership
        if (auth()->id() !== $drone->users_id) {
            abort(403, 'Unauthorized action.');
        }

        // Return a view for a single drone (assuming 'resources/views/drones/show.blade.php' exists)
        return view('drone.show', compact('drone'));
    }

    public function edit(Drone $drone)
    {
        // Use Gates/Policies (or simple check) to ensure ownership
        if (auth()->id() !== $drone->users_id) {
            abort(403, 'Unauthorized action.');
        }

        // Return a view for editing (assuming 'resources/views/drones/edit.blade.php' exists)
        return view('drone.edit', compact('drone'));
    }


    public function update(UpdateDroneRequest $request, Drone $drone)
    {
        // Use Gates/Policies (or simple check) to ensure ownership
        if (auth()->id() !== $drone->users_id) {
            abort(403, 'Unauthorized action.');
        }

        $drone->update($request->validated());

        // Redirect to the index page with a success flash message
        return redirect()->route('drone.index')->with('success', 'Drone updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drone  $drone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drone $drone)
    {
        // Use Gates/Policies (or simple check) to ensure ownership
        if (auth()->id() !== $drone->users_id) {
            abort(403, 'Unauthorized action.');
        }

        $drone->delete();

        // Redirect to the index page with a success flash message
        return redirect()->route('show.drones')->with('success', 'Drone deleted successfully!');
    }
}
