<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Espace SDI') }}
        </h2>
    </x-slot>
{{-- 
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

     --}}
<div class="gap-4 px-6 py-12 md:grid md:grid-cols-6">

    <div class="col-span-2 ">

        <div class="px-4 py-6 text-xl bg-white shadow-xl sm:rounded-lg">
            @if(Auth::user()->etudiant)           
                <p class="text-xl font-bold text-center ">
                    EQUIPE:
                    <span class="text-orange">
                        {{(Auth::user()->etudiant->currentEquipe()->nom)}} 
                    </span>
                </p>
                <p class="pt-2">
                    cette equipe est enregistée pour le  {{(Auth::user()->etudiant->currentEquipe()->libelle)}}   
                </p>
                <p class="pt-4 ">
                    <span class="font-bold text-gray-600 underline"> Informations sur les membres  </span> 
                    
                    
                    @foreach (Auth::user()->etudiant->getEquipe()->participants as $participant)
                        
                        <p class="py-3">
                            
                            <span class="font-bold text-orange text-md"> {{$participant->etudiant->matricule}} >> </span> 
                            <br>
                            {{$participant->etudiant->nom}} {{$participant->etudiant->prenom}} 
                            <span class="txt-md">({{$participant->etudiant->user->email}} )</span>
                            
                        </p>
                    @endforeach 

                
                </p>

            @else 
                <p class="text-xl font-bold text-center ">
                    Bienvenue:
                    <br>
                    <span class="text-orange">
                        Bienvenue chèr(e) administrateur sur votre espace 
                    </span>
                </p>
            @endif


        </div>

    </div>

    <div class="col-span-2 text-center">

        @if(Auth::user()->etudiant)
        
          
            <div class="text-center ">
                @if (Auth::user()->etudiant->currentEquipe()->statut)

                    <img src=" {{asset('images/app/winner.svg')}} " class="WineLogo">
                    <span class="text-xl font-bold text-green-600"> Felicitation Vôtre Equipe est sélectionnée</span>

                @else
                    <img src=" {{asset('images/app/lose.svg')}} " class="loseLogo">
                    <span class="text-xl font-bold text-red-600"> Dommage La prochaine fois sera la bonne</span>
                @endif
            </div>
        

        @else
        
            <img src=" {{asset('images/app/secure.svg')}} " class="WineLogo">

        @endif

    </div>

    <div class="col-span-2 ">
        
        <div class="px-4 py-6 bg-white shadow-xl sm:rounded-lg">
                        
            <p class="font-bold text-center text-md">
                Bienvenu {{Auth::user()->etudiant->nom ?? Auth::user()->name }} sur ton espace SDI 
            </p>
            <p class="pt-2">
                cet espace te permettra de consulter les résultats et de consulter les informations relative a ton groupe.
            </p>
            <p class="pt-4">
                <span class="font-bold text-orange"> HackEat >> </span> est l'espace te permmettant d'avoir access à la restauration de l'hackaton
                il faut noter que pour toutes personnes sélèctionnée la restauration sera assurée les :
                <ul class="font-bold text-gray-500">
                    <li> Vendredi et Samedi | matin, midi et soir </li>
                    <li> Dimanche | matin et midi  </li>
                </ul>
            </p>


            <p class="pt-4">
                <span class="font-bold text-orange"> HackNight >> </span> est l'espace te permmettant d'avoir access aux collations relative à l'hackaton
                il est bon de noter que pour toutes personnes sélèctionnée les collation seront servies le vendredi et le samedi aux heures suivantes
                <span class="font-bold text-gray-500">
                    15h 30 | 22h30 | 00h30 | 03h30
                </span>
            </p>

        </div>
        
     </div>

</div>
</x-app-layout>
