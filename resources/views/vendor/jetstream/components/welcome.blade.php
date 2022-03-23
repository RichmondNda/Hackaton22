<div class="p-6 bg-white border-b border-gray-200 sm:px-20">
    <div>
        <x-jet-application-logo class="block w-48 h-24" />
    </div>

    <div class="mt-4 text-2xl">
        Bienvenue Sur Ton espace Semaine De l'Innovation (SDI) 
    </div>

    <div class="mt-6 text-gray-500">
        
        
        
        @if(Auth::user()->etudiant)
        
            BIENVENUE Chère étudiant sur ton espace SDI 
            <br/>
            @if (Auth::user()->etudiant->currentEquipe()->statut)

                <span class="text-xl font-bold text-green-600"> Felicitation Vôtre Equipe est sélectionnée</span>

            @else

                <span class="text-xl font-bold text-red-600"> Dommage La prochaine fois sera la bonne</span>
                
            @endif
        

        @else
        
            BIENVENUE CHERS ADMINISTRATEUR SUR TON ESPACE DE TRAVAIL

        @endif

        
    </div>
</div>


