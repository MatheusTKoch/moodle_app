<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Prova;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class ProvaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Provas', [
            'materias' => Materia::get()->where('user_id', Auth::id())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('provas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Prova $prova)
    {

        $prova = Prova::create([
            'aluno_id' => $request->user()->id,
            'descricao' => $request->provaDesc,
            'materia_id' => $request->materiaDesc
        ]);

        $request->validate([
            'aluno_id' => 'required',
            'descricao' => 'required|string|max:100',
            'materia_id' => 'required',
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
