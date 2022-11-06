<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminResidenceRequest;
use App\Models\Residence;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminResidenceController extends Controller
{
    public function index()
    {
        $residences = Residence::all();
        return view('pages.admin.residences.index', [
            'residences' => $residences
        ]);
    }

    public function create()
    {
        return view('pages.admin.residences.create');
    }

    public function store(AdminResidenceRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        if ($request->file('image')) {
            $image_file = $request->file('image');
            $image_name = time() . "_" . $image_file->getClientOriginalName();
            $image_file->move(public_path('assets/admin/img'), $image_name);
            $data['image'] = $image_name;
        }

        Residence::create($data);
        toast('New residence successfully created!', 'success');
        return redirect()->route('admin.residences.index')->with('success', 'New residence successfully created!');
    }

    public function show(Residence $residence)
    {
        return view('pages.admin.residences.show', [
            'residence' => $residence
        ]);
    }

    public function edit(Residence $residence)
    {
        return view('pages.admin.residences.edit', [
            'residence' => $residence
        ]);
    }

    public function update(Residence $residence, AdminResidenceRequest $request)
    {
        $data = $request->all();
        if ($request->name !== $residence->name) {
            $data['slug'] = Str::slug($request->name);
        }

        if ($request->file('image')) {
            if ($residence->image !== null) {
                unlink(public_path('assets/admin/img/' . $residence->image));
            }

            $image_file = $request->file('image');
            $image_name = time() . "_" . $image_file->getClientOriginalName();
            $image_file->move(public_path('assets/admin/img'), $image_name);
            $data['image'] = $image_name;
        }

        $residence->update($data);
        toast('Residence successfully updated!', 'success');
        return redirect()->route('admin.residences.index')->with('success', 'Residence successfully updated!');
    }

    public function destroy(Residence $residence)
    {
        if ($residence->image !== null) {
            unlink(public_path('assets/admin/img/' . $residence->image));
        }

        $residence->delete();
        toast('Residence successfully deleted!', 'success');
        return redirect()->route('admin.residences.index')->with('success', 'Residence successfully deleted!');
    }
}
