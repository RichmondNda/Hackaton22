<div>
    
    <div class="px-4 py-5 ">

        <div class=" gap-4">

           <div class="text-right">
            <button 
              wire:click.prevent='deleteAllCommande()'
                class="px-6 py-3 mb-1 mr-1 text-sm font-bold uppercase transition-all text-white duration-150 rounded shadow outline-none ease-linearbg-emerald-500 bg-red-600
                hover:shadow-lg focus:outline-none">
                    Supprimer toutes les commandes
            </button>
           </div>

            <div>

  
                @if ($salles->isNotEmpty())
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y table-auto  divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Salle
                                    </th>
                                    
                                    @foreach ($collations as $collation)
                                    
                                        <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                           {{$collation->libelle}} 
                                        </th>
                                    
                                    @endforeach
                                    
                                    

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                 
                                    @foreach ($salles as $salle)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    
                                                    <div class="ml-4">
                                                        <div class="font-bold text-gray-900 text-md">
                                                            {{$salle->libelle}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            @foreach ($collations as $collation)
                                            
                                                <td class="px-6 py-4 text-xl text-gray-500 whitespace-nowrap">
                                                    <div class="font-bold text-gray-900 text-md">
                                                        {{$salle->getNbCollation($collation->id)}} 
                                                    </div>
                                                </td>
                                            
                                            @endforeach
                                            
                                        </tr>
                                    @endforeach
                            
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="py-2">
                        {{$salles->links()}}
                    </div>
                @else
                    <div class="flex items-center justify-center w-full h-full text-2xl font-bold ">
                        Aucune commande n'a été enregistrée
                    </div>
                @endif

            </div>

        </div>

    </div>

</div>
