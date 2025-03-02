<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index']);
    }

    public function index()
    {
        return Venue::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:venues,name',
            'location' => 'required|string',
            'capacity' => 'required|integer|min:1',
        ]);

        $venue = Venue::create([
            'name' => $request->name,
            'location' => $request->location,
            'capacity' => $request->capacity,
            'user_id' => Auth::id(),
        ]);

        return response()->json($venue, 201);
    }

    public function update(Request $request, $id)
    {
        $venue = Venue::findOrFail($id);

        $request->validate([
            'name' => 'required|string|unique:venues,name,' . $venue->id,
            'location' => 'required|string',
            'capacity' => 'required|integer|min:1',
        ]);

        $venue->update($request->all());

        return response()->json($venue);
    }

    public function destroy($id)
    {
        $venue = Venue::findOrFail($id);
        $venue->delete();

        return response()->json(['message' => 'Venue deleted successfully']);
    }
}