<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $residences = Residence::limit(3)->latest()->get();
        return view('pages.base.home', [
            'residences' => $residences
        ]);
    }
}
