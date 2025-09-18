<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours = Cours::all();
        return view("cours.read", compact("cours"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Cours::create($request->all());
        return redirect()->route('cours.index');

    }


    /*
     *  $module = new Cours();
        $module->titre = $request->titre;
        $module->duree = $request->duree;
        $module->description = $request->description;
        $module->save();
        return redirect('/cours');
     */
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
        $cours =Cours::find($id) ;
        return view('cours.edit',compact('cours'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cours = Cours::findOrFail($id);
        $cours->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'duree' => $request->duree,
        ]);

        return redirect()->route('cours.index')
            ->with('success', 'Cours mis à jour avec succès ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cours = Cours::find($id);
        $cours->delete();
        return redirect()->route('cours.index')
            ->with('success', 'Cours Supprimé avec succès.');

    }
}
