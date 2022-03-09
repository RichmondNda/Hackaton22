<div>

    <div class="flex py-2 px-4 ">
        
        <div class="pt-0 mb-3">
            <div class="flex items-start px-3 py-7">
                <div class="flex items-center h-5 ">
                  <input   wire:model='statut' value="{{old('statut')}}"
                   id="statut" type="checkbox" class="w-4 h-4 border-gray-300 rounded text-orange focus:ring-orange">
                </div>
                <div class="ml-3 ">
                  <label for="statut" class="font-bold text-gray-700">Equipes sélectionnées</label>
                </div>
            </div> 

        </div>

        <div class="pt-5 w-32 ml-3 px-2 py-2  ">
            <select  wire:model='niveauselect' value="{{old('niveauselect')}}"
                     class="relative w-full px-4 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none form-select focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100">
   
                @foreach ($niveaux as $niveau)
                    <option value="{{$niveau->id}}">{{$niveau->libelle}}</option>
                @endforeach
                
            </select>

        </div>



    </div>

    @if ($equipes->isNotEmpty())
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y table-auto  divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Nom de l'équipe
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Niveau
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Statut de l'equipe
                                </th>
                                <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Nom et premons des membres
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($equipes as $equipe)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-4">
                                                <div class="text-xl font-bold  text-gray-900 text-md">
                                                    {{$equipe->nom}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-4">
                                                <div class="text-sm font-bold  text-gray-900 text-md">
                                                    {{$equipe->niveau->libelle}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-4">
                                                <div class="text-sm font-bold  flex text-gray-900 text-md">
                                                    @if($equipe->statut == true)
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                        </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 font-bold text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                         </svg>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">

                                        @foreach ($equipe->participants as $participant )
                                            
                                            <div class="font-semibold text-gray-900 text-md flex">
                                                {{$participant->etudiant->matricule}} |{{$participant->etudiant->nom}}  {{$participant->etudiant->prenom}} 
                                                
                                                @if($participant->chef )  
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 " viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                            </div>
                                        
                                        @endforeach
                                        
                                    </td>

                                    <td>
                                        <div class="flex">
                                            <button 
                                                wire:click.prevent='selection({{$equipe->id}})'
                                                class="px-2 py-1 text-sm font-bold flex text-green-700 uppercase transition-all duration-150 rounded shadow outline-none ease-linearbg-emerald-500  hover:shadow-lg focus:outline-none" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                                    </svg>   
                                                
                                            </button>
                                        </div>
                                    </td>
                                    
                                </tr>
                                @endforeach
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2">
            {{$equipes->links()}}
        </div>
    @else
        <div class="flex items-center justify-center w-full h-full text-2xl font-bold ">
            Auncune equipe n'est enregistrée pour l'instant
        </div>
    @endif

</div>
