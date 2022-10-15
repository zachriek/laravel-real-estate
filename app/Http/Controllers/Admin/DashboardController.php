<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Residence;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $residences_count = Residence::count();

        return view('pages.admin.dashboard', [
            'users_count' => $users_count,
            'residences_count' => $residences_count
        ]);
    }
}
