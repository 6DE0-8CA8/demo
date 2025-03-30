<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use Illuminate\Http\Request;

class fournisseurcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $four = fournisseur::orderby('nom', 'asc')->get();
        return view('fournisseur.index', compact('four'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:fournisseurs,email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/',

        ]);
        fournisseur::create($request->all());
        return redirect()->route('fournisseur.index')->with('succes','fournisseur aujouter avec succes');
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
