<?php

namespace App\Http\Livewire\Participants;

use App\Models\Classe;
use App\Models\Equipe;
use App\Models\Etudiant;
use App\Models\Hackaton;
use App\Models\Niveau;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Enregistrement extends Component
{
    // variables de groupe

    public $niveau = "1";
    public $nom_groupe;
    public $photo_groupe ;

    // variables relative au chef

    public $matricule_chef;
    public $nom_chef;
    public $prenom_chef;
    public $classe_chef;
    public $email_chef;
    public $genre_chef = "Masculin";
    

    // variables relatives au membre 2

    public $matricule_m2;
    public $nom_m2;
    public $prenom_m2;
    public $classe_m2;
    public $email_m2;
    public $genre_m2 = "Masculin";
    // variables relatives au membre 3

    public $matricule_m3;
    public $nom_m3;
    public $prenom_m3;
    public $classe_m3;
    public $email_m3;
    public $genre_m3= "Masculin" ;



    public function render()
    {
        return view('livewire.participants.enregistrement', [
            'niveaux' => Niveau::all(),
            'classes' => Classe::where('niveau_id', $this->niveau)->get() 
            
        ]);
    }

    public function updatedNiveau()
    {
        
        $this->classes = Classe::where('niveau_id', $this->niveau)->get() ;
    }

    public function resetInput()
    {
        $this->niveau = "1" ;
        $this->nom_groupe = "" ;
        $this->photo_groupe  = "" ;

        // variables relative au chef

        $this->matricule_chef = "" ;
        $this->nom_chef = "" ;
        $this->prenom_chef = "" ;
        $this->classe_chef = "" ;
        $this->email_chef = "" ;

        $this->genre_chef = "" ;
        $this->genre_m3 = "" ;
        $this->genre_m2 = "" ;
        

        // variables relatives au membre 2

        $this->matricule_m2 = "" ;
        $this->nom_m2 = "" ;
        $this->prenom_m2 = "" ;
        $this->classe_m2 = "" ;
        $this->email_m2 = "" ;

        // variables relatives au membre 3

        $this->matricule_m3 = "" ;
        $this->nom_m3 = "" ;
        $this->prenom_m3 = "" ;
        $this->classe_m3 = "" ;
        $this->email_m3 = "" ;
    }

    public function createEquipe()
    {
        
        $this->validate([
            'niveau' => 'required',
            'nom_groupe' => 'required',

            'matricule_chef' => 'required|min:8|unique:etudiants,matricule',
            'nom_chef' => 'required',
            'prenom_chef' => 'required',
            'classe_chef' => 'required',
            'email_chef' => 'required|email|unique:users,email',

            'matricule_m2' => 'required|min:8|unique:etudiants,matricule',
            'nom_m2' => 'required',
            'prenom_m2' => 'required',
            'classe_m2' => 'required',
            'email_m2' => 'required|email|email|unique:users,email',

            'genre_chef' => 'required',
            'genre_m2' => 'required',
            'genre_m3' => 'required',


            'matricule_m3' => 'required|min:8|unique:etudiants,matricule',
            'nom_m3' => 'required',
            'prenom_m3' => 'required',
            'classe_m3' => 'required',
            'email_m3' => 'required|email|email|unique:users,email'

        ]);

        
        // recuperation de l'hackaton

        $hackaton = Hackaton::latest()->first();
        
        // creation de l'équipe
        $equipe = Equipe::create([ 
            'nom' => $this->nom_groupe,
            'logo' => $this->photo_groupe,
            'niveau_id' => $this->niveau,
            'hackaton_id' => $hackaton->id
        ]);


        


        // creation du participant 1 

        $user1 = User::create([
            'name' => trim($this->matricule_chef),
            'email' => $this->email_chef,
            'password' => Hash::make("TH@123456789")
        ]);

        $etudiant1 = Etudiant::create([
            'nom' => $this->nom_chef,
            'prenom' => $this->prenom_chef,
            'matricule' => trim($this->matricule_chef),
            'genre' => $this->genre_chef,
            'user_id' => $user1->id
        ]);


        // creation du participant 2 

        $user2 = User::create([
            'name' => trim($this->matricule_m2),
            'email' => $this->email_m2,
            'password' => Hash::make("TH@123456789")
        ]);

        $etudiant2 = Etudiant::create([
            'nom' => $this->nom_m2,
            'prenom' => $this->prenom_m2,
            'matricule' => trim($this->matricule_m2),
            'genre' => $this->genre_m2,
            'user_id' => $user2->id
        ]);


        // creation du participant 3 

        $user3 = User::create([
            'name' => trim($this->matricule_m3),
            'email' => $this->email_m3,
            'password' => Hash::make("TH@123456789")
        ]);

        $etudiant3 = Etudiant::create([
            'nom' => $this->nom_m3,
            'prenom' => $this->prenom_m3,
            'matricule' => trim($this->matricule_m3),
            'genre' => $this->genre_m3,
            'user_id' => $user3->id
        ]);

        // enregistrement des participants

        Participant::create([
            'chef' => true,
            'etudiant_id' => $etudiant1->id,
            'equipe_id' => $equipe->id,
            'hackaton_id' => $hackaton->id
        ]);

        Participant::create([
            'etudiant_id' => $etudiant2->id,
            'equipe_id' => $equipe->id,
            'hackaton_id' => $hackaton->id
        ]);

        Participant::create([
            'etudiant_id' => $etudiant3->id,
            'equipe_id' => $equipe->id,
            'hackaton_id' => $hackaton->id
        ]);


        $this->resetInput();

        

    }

}
