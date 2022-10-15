<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    public function index()
    {
        $residences = Residence::latest()->paginate(6)->withQueryString();
        return view('pages.base.residences.index', [
            'residences' => $residences
        ]);
    }

    public function show(Residence $residence)
    {
        return view('pages.base.residences.show', [
            'residence' => $residence
        ]);
    }
}
