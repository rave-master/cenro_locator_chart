<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personel_locator;
class PesonnelLocatorController extends Controller
{
    public function index()
    {
        $personnel = personel_locator::all();
        return view('personel_locator.index', compact('personnel'));
    }
    public function create()
    {
        return view('personel_locator.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'monday' => 'required|string|max:255',
            'tuesday' => 'required|string|max:255',
            'wednesday' => 'required|string|max:255',
            'thursday' => 'required|string|max:255',
            'friday' => 'required|string|max:255',
        ]);

        personel_locator::create($request->all());

        return redirect()->route('personel_locator.index')->with('success', 'Personnel created successfully.');
    }
    public function edit($id)
    {
        $personelLocator = personel_locator::findOrFail($id);
        return view('personel_locator.edit', compact('personelLocator'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'monday' => 'required|string|max:255',
            'tuesday' => 'required|string|max:255',
            'wednesday' => 'required|string|max:255',
            'thursday' => 'required|string|max:255',
            'friday' => 'required|string|max:255',
        ]);

        $personelLocator = personel_locator::findOrFail($id);
        $personelLocator->update($request->all());

        return redirect()->route('personel_locator.index')->with('success', 'Personnel updated successfully.');
    }
    public function destroy($id)
    {
        $personelLocator = personel_locator::findOrFail($id);
        $personelLocator->delete();

        return redirect()->route('personel_locator.index')->with('success', 'Personnel deleted successfully.');
    }

    
}
