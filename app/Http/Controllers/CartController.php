<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->where('transaction_status', 'in_cart')->get();
        return view('pages.base.carts.index', [
            'transactions' => $transactions
        ]);
    }

    public function store(Request $request, Residence $residence, $transaction_status)
    {
        Transaction::create([
            'user_id' => auth()->user()->id,
            'residence_id' => $residence->id,
            'transaction_status' => $transaction_status
        ]);
        if ($transaction_status === 'in_cart') {
            $message = 'Add to cart success!';
        } else if ($transaction_status === 'pending') {
            $message = 'Transaction success!';
        }
        toast($message, 'success');
        return redirect()->route('residences.index')->with('success', $message);
    }

    public function update(Request $request, Residence $residence)
    {
        $transaction = Transaction::where('transaction_status', 'in_cart')->where('residence_id', $residence->id)->first();
        $transaction->update([
            'transaction_status' => 'pending'
        ]);
        toast('Transaction success!', 'success');
        return redirect()->route('residences.index')->with('success', 'Transaction success!');
    }

    public function destroy(Residence $residence)
    {
        $transaction = Transaction::where('transaction_status', 'in_cart')->where('residence_id', $residence->id)->first();
        $transaction->delete();
        toast('Cart successfully removed!', 'success');
        return back()->with('success', 'Cart successfully removed!');
    }
}
