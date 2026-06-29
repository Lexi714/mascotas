<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    // Metodo para obtener datos y paginarlos
    public function index()
    {
        $pets = Pet::latest()->paginate(5);

        return view('pets.index', compact('pets'));
    }

    // Metodo para mostrar el formulario de creacion
    public function create()
    {
        return view('pets.create');
    }

    // Metodo para guardar los datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        Pet::create($validated);

        return redirect()
            ->route('pets.index')
            ->with('success', 'Mascota registrada correctamente.');
    }
}