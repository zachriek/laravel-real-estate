<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('pages.admin.password.edit');
    }

    public function update(UpdatePasswordRequest $request)
    {
        if (!(Hash::check($request->current_password, auth()->user()->password))) {
            toast('Your current password does not matches with the password', 'error');
            return redirect()->back()->with('error', 'Your current password does not matches with the password!');
        }

        if (strcmp($request->current_password, $request->password) === 0) {
            toast('New Password cannot be same as your current password', 'error');
            return redirect()->back()->with('error', 'New Password cannot be same as your current password!');
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        toast('Password successfully changed!', 'success');
        return redirect()->back()->with('success', 'Password successfully changed!');
    }
}
