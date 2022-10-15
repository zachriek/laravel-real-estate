<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    public function edit()
    {
        return view('pages.admin.profile.edit');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $data = $request->all();

        if ($request->file('image')) {
            if (auth()->user()->image !== null) {
                unlink(public_path('assets/admin/img/' . auth()->user()->image));
            }

            $image_file = $request->file('image');
            $image_name = time() . "_" . $image_file->getClientOriginalName();
            $image_file->move(public_path('assets/admin/img'), $image_name);
            $data['image'] = $image_name;
        }

        $user->update($data);
        toast('Profile successfully updated!', 'success');
        return redirect()->route('profile.edit')->with('success', 'Profile successfully updated!');
    }
}
