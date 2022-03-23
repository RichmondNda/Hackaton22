<?php

namespace App\Http\Controllers;

use App\Models\Hackaton;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function welcome()
    {
        $hackaton = Hackaton::latest()->first() ;

        if($hackaton->inscription)
        {
            return view('acceuil') ;
        }
        else
        {
            return view('participants.encours');
        }
    }

    public function inscription()
    {
        $hackaton = Hackaton::latest()->first() ;

        if($hackaton->inscription)
        {
           
            return view('participants.inscription') ;
        }
        else
        {
            return redirect()->route('welcome') ;
            
        }
    }

    public function inscriptionterminer()
    {
        $hackaton = Hackaton::latest()->first() ;

        if($hackaton->inscription)
        {
           
            return view('terminer') ;
        }
        else
        {
            return redirect()->route('welcome') ;
            
        }
    }

    public function index()
    {
        return view('Admin.parametrage') ;
    }

    public function selectionGroupe()
    {
        return view('Admin.selection') ;
    }

    public function impression()
    {
        return view('Admin.Impression') ;
    }
}
