<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('front_end.Publication.index');
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
        //
         $request->validate([
        'titre' => 'required',
        'description' => 'required',
        'images' => 'required|image|mimes:jpeg,png,jpg,gif', // Exemple de validation d'image
        'status' => 'required',
    ]);
        // $user->telephone=$request->telephone;

        $publication = new Publication();
        $publication->titre=$request->titre;
        $publication->description=$request->description;
        
         if($request->hasFile('images')){
            $images = $request->file('images');
            $nameFil = time().'_MSB_publication_'.$images->getClientOriginalName();
            $publication->images=$images->storeAs('images',$nameFil,'public');
        }
        $publication->status=$request->status;
        $publication->User_id=auth()->user()->id;
        
        
        $publication->save();
        return back()->with('succes','Publication ajouter avec succès');

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
