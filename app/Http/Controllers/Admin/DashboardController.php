<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Residence;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $residences_count = Residence::count();
        $pending_transactions_count = Transaction::where('transaction_status', 'pending')->count();
        $success_transactions_count = Transaction::where('transaction_status', 'success')->count();

        return view('pages.admin.dashboard', [
            'users_count' => $users_count,
            'residences_count' => $residences_count,
            'pending_transactions_count' => $pending_transactions_count,
            'success_transactions_count' => $success_transactions_count
        ]);
    }
}
