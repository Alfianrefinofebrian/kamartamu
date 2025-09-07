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
        $properties = Property::with('images')->ordered()->get()->map(function ($p) {
            // Normalize related images to full URLs
            $p->images = $p->images->map(function ($img) {
                $url = $img->image_url ? asset('storage/' . $img->image_url) : null;
                return [
                    'id' => $img->id,
                    'image_url' => $url,
                ];
            })->values();

            // Ensure property.image_url is a full URL; if missing, fallback to first related image
            if ($p->image_url) {
                $p->image_url = asset('storage/' . ltrim($p->image_url, '/'));
            } elseif ($p->images->count()) {
                $p->image_url = $p->images[0]['image_url'] ?? null;
            }

            return $p;
        });

        return response()->json($properties);
    }

    // Detail property by ID
    public function show($id)
    {
        // Accept slug-like segments such as "kamartamu-selomartani-1" or "selomartani-1"
        if (!is_numeric($id)) {
            if (preg_match('/(\d+)$/', $id, $matches)) {
                $id = $matches[1];
            }
        }

        $property = Property::with('images')->findOrFail($id);

        // Normalize related images to full URLs
        $property->images = $property->images->map(function ($img) {
            $url = $img->image_url ? asset('storage/' . $img->image_url) : null;
            return [
                'id' => $img->id,
                'image_url' => $url,
            ];
        })->values();

        if ($property->image_url) {
            $property->image_url = asset('storage/' . ltrim($property->image_url, '/'));
        } elseif ($property->images->count()) {
            $property->image_url = $property->images[0]['image_url'] ?? null;
        }

        return response()->json($property);
    }
}
