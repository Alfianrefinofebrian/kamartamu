<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // List all properties
    public function index()
    {
        return response()->json(Property::with('images')->get());
    }

    // Detail property by ID
    public function show($id)
    {
        $property = Property::with('images')->findOrFail($id);
        return response()->json($property);
    }
}
