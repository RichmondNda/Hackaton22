<div>
    
    <div class="px-4 py-5 ">

        <div class="md:grid md:grid-cols-6 gap-4">

            <div class="col-span-2 ">
                
                <div class="font-bold text-center text-md">
                    Enregistrer une salle
                </div>

                <div class="px-6 mt-6">
                    <form method="POST">
                        @csrf
                        
                        <div class="pt-0 mb-3">
                            <label class="font-bold ">libelle de la salle</label>
                            <input type="text" placeholder="SRIT 1 A"   wire:model.defer='libelle' value="{{old("libelle")}}"
                              class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100" />
                                @error('libelle')
                                    <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('libelle') }}  </div>
                                @enderror
                        </div>    
                        
                        <div class="pt-0 mb-3">
                            <label class="font-bold ">nombre d'equipe</label>
                            <input type="number" min="0" max="10"   wire:model.defer='nb_equipe' value="{{old("nb_equipe")}}"
                              class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100" />
                                @error('nb_equipe')
                                    <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('nb_equipe') }}  </div>
                                @enderror
                        </div>    

                        <div class="flex justify-end">
                            <button 
                                wire:click.prevent='@if($edit_mode) updatesalle({{$salle_id}})  @else createsalle() @endif '
                                class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none ease-linearbg-emerald-500 bg-myblue hover:shadow-lg focus:outline-none" type="submit">
                                    @if($edit_mode) Mettre à jour  @else  Enregistrer @endif
                            </button>
                        </div>
        
                    </form> 
                </div>
            

            </div>
            <div class="col-span-4 ">
                
                @if ($salles->isNotEmpty())
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 table-auto">
                                <thead class="bg-gray-50">
                                <tr>
                                    
                                    <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        salle
                                    </th>
                                    <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        nombre d'equipe
                                    </th>
                                    <th scope="" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        
                                    </th>

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

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                
                                                <div class="ml-4">
                                                    <div class="font-bold text-gray-900 text-md">
                                                        {{$salle->nb_equipe}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        

                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            
                                            <div class="flex">
                                                <a  class="px-2 text-indigo-600 cursor-pointer hover:text-indigo-900" 
                                                    wire:click="editsalle({{$salle->id}})"
                                                >
                                                    <svg class="w-6 h-6 "  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                                                </a>
                                                

                                                <a  class="px-2 text-red-600 cursor-pointer hover:text-red-900" 
                                                    wire:click="deletesalle({{$salle->id}})"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
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
                        {{$salles->links()}}
                    </div>
                @else
                    <div class="flex items-center justify-center w-full h-full text-2xl font-bold ">
                        Aucune salle n'a été enregistrée
                    </div>
                @endif

            </div>

        </div>

    </div>

</div>
