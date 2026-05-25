<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $partners = Partner::query();

        if ($search) {
            $partners->where('name', 'LIKE', '%' . $search . '%');
        }

        $partners = $partners->latest()->get();

        return view('admin.partners.index', compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        Partner::create([
            'name' => $request->name,
            'logo_url' => $request->logo_url,
        ]);

        return redirect('/admin/partners')
            ->with('success', 'Data partner berhasil ditambahkan.');;
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $partner->update([
            'name' => $request->name,
            'logo_url' => $request->logo_url,
        ]);

        return redirect('/admin/partners')
            ->with('success', 'Data partner berhasil diperbaharui.');
    }
    public function destroy($id)
    {
        Partner::findOrFail($id)->delete();

        return redirect('/admin/partners')
            ->with('success', 'Data partner berhasil dihapus.');;
    }
}
