<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //
    public function changeLanguage(string $local){
        // stocker la langue choisie dans la session de l'utilisateur
        Session::put('local', $local);
        // rediriger sur la page précedente
        return redirect()->back();
    }
}
