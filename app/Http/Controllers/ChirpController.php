<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $action = action([ChirpController::class, 'index']);
        // dd($action);
        // exit();
        // dd(User::all());
        return view("chirps.index", [
            'chirps' => Chirp::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // envoyer les données en BDD
        $request->user()->chirps()->create($validated);

        // rediriger sur chirps.index
        return redirect(route('chirps.index'));

        // dd($validated);
        // dd('methde store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
        // dd('En cours d\'édition');
        return view('chirps.edit',[
            'chirp' => $chirp
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        // ddd($request);
     // vérifié si l'utilisateur a l'autorisation de mettre à jour le commentaire
        $this->authorize('update', $chirp);

        $validated = $request->validate([
            'message' => 'required|string|max:225',
        ]);
    
        $chirp->update($validated); // mise à jour

        return redirect(route('chirps.index')); // redirection
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        // vérifier l'autorisation du user
        $this->authorize('delete', $chirp);
        // suprimer la resource
        $chirp->delete();
        // rediriger vers la page des commentaires
        return redirect(route('chirps.index')); // redirection
    }
}
