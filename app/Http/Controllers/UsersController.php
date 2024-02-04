<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('front_end.Users.index');
    }
    public function login()
    {
        //
        return view('front_end.Users.login');
    }
    public function Authentification(Request $request)
    {
        $InformationDeCurentUser = request()->validate([
            'telephone' => 'required',
            'password' => 'required'

        ]);
        //  verification des information de user dans la base de donnée
        if (Auth::attempt($InformationDeCurentUser)) {

            return redirect('/');
        } else {
            return back();
        }
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
    public function store(StoreUserRequest $request)
    {
        //
        $user = new User();
        $user->telephone = $request->telephone;
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->pseudo = $request->pseudo;
        //$verifie = verifion if une image a ete soumis ou pas by current user
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $nameFil = time() . '_MSB_avatar_' . $avatar->getClientOriginalName();
            // if($verifie)
            $user->avatar = $avatar->storeAs('avatars', $nameFil, 'public');
        }
        // if this current use has not selected a file avatar assign default image 
        else{
            $user->avatar='imgs/DefaulteAvatar.jpg';//route for defaulte avatar
        }
        // for fil couverture 
        if($request->hasFile('couverture')){
            $couverture = $request->file('couverture');
            $nameFil = time().'_MSB_couverture_'.$couverture->getClientOriginalName();
            $user->couverture=$couverture->storeAs('couvertures',$nameFil,'public');
        }
        $user->couverture = $request->couverture;
        $user->status = $request->status;
        $user->biographie = $request->biographie;
        $user->password = bcrypt($request->password);
        // enregistrement de user
        $user->save();

        return back()->with('succes', 'Utulisateur ajouter avec succès');
        // lui attribuer un role directement
        $user->addRole('client');
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
