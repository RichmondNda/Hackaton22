<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Hackaton;
use App\Models\Niveau;
use Illuminate\Http\Request;
use PDF;

class pdfController extends Controller
{

    public function listeEquipeN1(){


        $hackaton = Hackaton::all()->last();
        $niveau1 = Niveau::where('libelle', 'Niveau 1')->first() ;
        $equipes = Equipe::where('hackaton_id', $hackaton->id)
                            ->where('niveau_id', $niveau1->id)->get();
        
        $data = [
            'title' => 'Hackathon',
            'date' => date('d-m-Y à h:i:s A'),
            'niveau' => ' Niveau 1',
            'equipes' => $equipes
            
        ];
          
        $pdf = PDF::loadView('pdf.listeEquipes', $data);
    
        // return $pdf->download('listeEquipes.pdf');

        return $pdf->stream('listeEquipes.pdf');


    }

    public function listeEquipeN2(){


        $hackaton = Hackaton::all()->last();
        $niveau1 = Niveau::where('libelle', 'Niveau 2')->first() ;
        $equipes = Equipe::where('hackaton_id', $hackaton->id)
                            ->where('niveau_id', $niveau1->id)->get();
        
        $data = [
            'title' => 'Hackathon',
            'date' => date('d-m-Y à h:i:s A'),
            'niveau' => ' Niveau 2',
            'equipes' => $equipes
            
        ];
          
        $pdf = PDF::loadView('pdf.listeEquipes', $data);
    
        // return $pdf->download('listeEquipes.pdf');

        return $pdf->stream('listeEquipes.pdf');


    }

    public function listeEquipeN3(){


        $hackaton = Hackaton::all()->last();
        $niveau1 = Niveau::where('libelle', 'Niveau 3')->first() ;
        $equipes = Equipe::where('hackaton_id', $hackaton->id)
                            ->where('niveau_id', $niveau1->id)->get();
        
        $data = [
            'title' => 'Hackathon',
            'date' => date('d-m-Y à h:i:s A'),
            'niveau' => ' Niveau 3',
            'equipes' => $equipes
            
        ];
          
        $pdf = PDF::loadView('pdf.listeEquipes', $data);
    
        // return $pdf->download('listeEquipes.pdf');

        return $pdf->stream('listeEquipes.pdf');


    }



    public function listeselectEquipeN1(){


        $hackaton = Hackaton::all()->last();
        $niveau1 = Niveau::where('libelle', 'Niveau 1')->first() ;
        $equipes = Equipe::where('hackaton_id', $hackaton->id)
                            ->where('statut', 1)
                            ->where('niveau_id', $niveau1->id)->get();
        
        $data = [
            'title' => 'Hackathon',
            'date' => date('d-m-Y à h:i:s A'),
            'niveau' => ' Niveau 1',
            'equipes' => $equipes
            
        ];
          
        $pdf = PDF::loadView('pdf.listeEquipes', $data);
    
        // return $pdf->download('listeEquipes.pdf');

        return $pdf->stream('listeEquipes.pdf');


    }

    public function listeselectEquipeN2(){


        $hackaton = Hackaton::all()->last();
        $niveau1 = Niveau::where('libelle', 'Niveau 2')->first() ;
        $equipes = Equipe::where('hackaton_id', $hackaton->id)
                            ->where('statut', 1)    
                            ->where('niveau_id', $niveau1->id)->get();
        
        $data = [
            'title' => 'Hackathon',
            'date' => date('d-m-Y à h:i:s A'),
            'niveau' => ' Niveau 2',
            'equipes' => $equipes
            
        ];
          
        $pdf = PDF::loadView('pdf.listeEquipes', $data);
    
        // return $pdf->download('listeEquipes.pdf');

        return $pdf->stream('listeEquipes.pdf');


    }

    public function listeselectEquipeN3(){


        $hackaton = Hackaton::all()->last();
        $niveau1 = Niveau::where('libelle', 'Niveau 3')->first() ;
        $equipes = Equipe::where('hackaton_id', $hackaton->id)
                            ->where('statut', 1)
                            ->where('niveau_id', $niveau1->id)->get();
        
        $data = [
            'title' => 'Hackathon',
            'date' => date('d-m-Y à h:i:s A'),
            'niveau' => ' Niveau 3',
            'equipes' => $equipes
            
        ];
          
        $pdf = PDF::loadView('pdf.listeEquipes', $data);
    
        // return $pdf->download('listeEquipes.pdf');

        return $pdf->stream('listeEquipes.pdf');


    }


}
