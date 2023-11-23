<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Materia $materia)
    {
        return Inertia::render('Materias', [
            'materias' => Materia::all()->where('user_id', '=', Auth::id())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Materias');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Materia $materia)
    {
        $materia = Materia::create([
            'nome' => $request->materias,
            'user_id' => $request->user()->id
        ]);

        $request->validate([
            'nome' => 'required|string|max:100',
            'user_id' => 'required',
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
