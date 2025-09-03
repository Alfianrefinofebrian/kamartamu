<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // GET /api/properties
    public function index()
    {
        return response()->json(Property::all());
    }

    // GET /api/properties/{id}
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return response()->json($property);
    }
}
