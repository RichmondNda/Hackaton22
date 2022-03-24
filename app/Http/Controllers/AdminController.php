<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Commande;
use App\Models\Etudiant;
use App\Models\Hackaton;
use App\Models\Collation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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


    
    public function restauration()
    {
        if (Auth::user()->etudiant->currentEquipe()->statut)
        {
            $etudiant = Etudiant::where('user_id', Auth::user()->id)->first() ;

            $collations = Collation::all();
        
            $m = Crypt::encryptString($etudiant->matricule);
            $t = Crypt::decryptString($m);
            //$qr = base64_encode(QrCode::format('svg')->size(250)->errorCorrection('H')->generate($m));
    
            $qrcode = QrCode::size(300)->generate($m);
            return view('participants.restauration', compact('qrcode', 'collations') );
        }
        else
        {
            return redirect()->route('welcome');
        }
    }

    public function getCommandes(Request $request)
    {
        $equipe = Auth::user()->etudiant->getEquipe();
        $monequipe =  Equipe::find($equipe->id);

        request()->validate([
            'collation_etu0_id' => 'required',
            'collation_etu1_id' => 'required',
            'collation_etu2_id' => 'required'
        ]);


        foreach ($equipe->participants as $key => $participant) {
            Commande::create([
                'etudiant_id' => $participant->etudiant_id,
                'salle_id' => $monequipe->currentSalle()->id,
                'collation_id' => $request['collation_etu'.$key.'_id']
            ]);
        }

        

        return redirect()->back();


    }

}
