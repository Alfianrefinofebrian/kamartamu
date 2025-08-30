<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Property;
use App\Models\Villa;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $sliders    = Slider::latest()->get();
        $properties = Property::latest()->get();
        $villas     = Villa::latest()->get();

        // Kirim semua data ke view LandingPage.blade.php
        return view('LandingPage', compact('sliders', 'properties', 'villas'));
    }
}