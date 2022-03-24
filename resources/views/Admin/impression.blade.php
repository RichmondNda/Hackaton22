<x-app-layout>

    <div class="py-2">
        <div class="grid-rows-2 gap-4 mx-auto max-w-8xl sm:px-6 lg:px-2">
            <div class="px-4 py-4 overflow-hidden bg-white shadow-md sm:rounded-lg">
                
                <div>
                    <span class="font-bold ">IMPRESSION DES LISTES D'EQUIPES SELECTIONNEES </span>
                
                    <div class="grid gap-6 py-6 md:grid-cols-6">
                       
                        <div class="col-span-2">
                            <span> Equipes de niveau 1 </span>
                            <a target="_blank" href=" {{route('liste.equipe.select.n1', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 bg-gray-500 rounded shadow outline-none ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>
                        
                        <div class="col-span-2">
                            <span> Equipes de niveau 2 </span>
                            <a target="_blank" href=" {{route('liste.equipe.select.n2', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 bg-gray-500 rounded shadow outline-none ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>

                        <div class="col-span-2">
                            <span> Equipes de niveau 3 </span>
                            <a target="_blank" href="{{route('liste.equipe.select.n3', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 bg-gray-500 rounded shadow outline-none ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>
                    </div>
                </div>
                
            </div>

           
        </div>
    </div>

    <div class="py-2">
        <div class="grid-rows-2 gap-4 mx-auto max-w-8xl sm:px-6 lg:px-2">
            <div class="px-4 py-4 overflow-hidden bg-white shadow-md sm:rounded-lg">
                
                <div>
                    <span class="font-bold ">IMPRESSION DES LISTES PAR NIVEAU</span>
                
                    <div class="grid gap-6 py-6 md:grid-cols-6">
                       
                        <div class="col-span-2">
                            <span> Equipes de niveau 1 </span>
                            <a target="_blank" href=" {{route('liste.equipe.n1', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none bg-myblue ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>
                        
                        <div class="col-span-2">
                            <span> Equipes de niveau 2 </span>
                            <a target="_blank" href=" {{route('liste.equipe.n2', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none bg-myblue ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>

                        <div class="col-span-2">
                            <span> Equipes de niveau 3 </span>
                            <a target="_blank" href="{{route('liste.equipe.n3', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none bg-myblue ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="grid-rows-2 gap-4 mx-auto max-w-8xl sm:px-6 lg:px-2">
            <div class="px-4 py-4 overflow-hidden bg-white shadow-md sm:rounded-lg">
                
                <div>
                    <span class="font-bold ">IMPRESSION DES FICHES</span>
                
                    <div class="grid gap-6 py-6 md:grid-cols-6">
                       
                        <div class="col-span-2">
                            <span> Rep. Equipe par Salle </span>
                            <a target="_blank" href=" {{route('pdf.repartition', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none bg-orange ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>
                        
                        <div class="col-span-2">
                            <span> Commandes Collation </span>
                            <a target="_blank" href=" {{route('pdf.commandes', null, false)}} "
                            class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none bg-orange ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                        </div>

                        <div class="col-span-2">
                            
                            {{-- 
                                <span> Equipes de niveau 3 </span>
                                <a target="_blank" href="{{route('liste.equipe.n3')}} "
                                class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none bg-gray-700 ease-linearbg-emerald-500 hover:shadow-lg focus:outline-none">Imprimer</a>
                            --}}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>