<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminTransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            $transactions = Transaction::all();
        } else if (auth()->user()->role === 'user') {
            $transactions = Transaction::where('user_id', auth()->user()->id)->where('transaction_status', '!=', 'in_cart')->get();
        }
        return view('pages.admin.transactions.index', [
            'transactions' => $transactions
        ]);
    }

    public function show(Transaction $transaction)
    {
        if ($transaction->user_id !== auth()->user()->id) {
            return back();
        }
        return view('pages.admin.transactions.show', [
            'transaction' => $transaction
        ]);
    }

    public function edit(Transaction $transaction)
    {
        return view('pages.admin.transactions.edit', [
            'transaction' => $transaction
        ]);
    }

    public function update(Transaction $transaction, AdminTransactionRequest $request)
    {
        $data = $request->all();
        $transaction->update($data);
        toast('Transaction successfully updated!', 'success');
        return redirect()->route('admin.transactions.index')->with('success', 'Transaction successfully updated!');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        toast('Transaction successfully deleted!', 'success');
        return redirect()->route('admin.transactions.index')->with('success', 'Transaction successfully deleted!');
    }
}
