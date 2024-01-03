<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class Etudiantcontroller extends Controller
{
    public function form_inscription(Request $request){
        $request->validate([
        'CIN'=> 'CIN|required|unique:etudiant',
        'Prenom'=>'required',
        'Nom'=>'required',
        'Date_Naissance'=>'required',
        'Note_Bac2'=>'required',
        'Email'=>'required',
        'Tel'=>'required',
        ]);

        $etudiant = etudiant();
        $etudiant->CIN = $request->input('CIN');       
        $etudiant->Prenom = $request->input('Prenom');
        $etudiant->Nom = $request->input('Nom');
        $etudiant->Date_Naissance = $request->input('Date_Naissance');
        $etudiant->Note_Bac2 = $request->input('Note_Bac2');
        $etudiant->Email = $request->input('Email');
        $etudiant->Tel = $request->input('Tel');
        $etudiant->save();
    
        return redirect('/ecole')->with('status','inscription terminé avec succès!');

    }
}
