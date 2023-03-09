<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     * Afficher la liste des Ressource (ou liste des etudiante)
     */
    public function index()
    {
         $etudiants = Etudiant::all();
         return view('pages/etudient.liste' , compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     * Permet d'afficher le formulaire de création
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * permet de stocké les ressources crée
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Afficher la ressource spécifiée
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Pérmet de modifier un ressource
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Mettre à jour la ressource spécifiée dans le stockage
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy(string $id)
    {
        //
    }
}
