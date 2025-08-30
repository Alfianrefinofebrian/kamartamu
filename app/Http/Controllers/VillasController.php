<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Villa; // Model Villa kamu

class HomeController extends Controller
{
        public function index()
    {
        $villas = Villa::all(); // ambil semua data villa
        return view('landing.index', compact('villas'));
    }

}