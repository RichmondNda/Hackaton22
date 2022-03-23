<div>
    
    <div class="px-4 py-5 ">

        <div class="md:grid md:grid-cols-6 gap-4">

            <div class="col-span-2 ">
                
                <div class="font-bold text-center text-md">
                    Enregistrer une repartition
                </div>

                <div class="px-6 mt-6">
                    {{-- <form method="POST">
                        @csrf
                        
                        <p>Salle de classe</p>
                        <div class="pt-0 mb-3">
                            <select  wire:model.defer='salle_id' value="{{old('salle_id')}}"
                                     class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none form-select focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100">
                                <option value=""></option>
                                
                                @foreach ($salles as $salle)
                                    <option value="{{$salle->id}}">{{$salle->libelle}}</option>
                                @endforeach
                                
                            </select>
                            @error('salle_id')
                                <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('salle_id') }}  </div>
                            @enderror
                        </div>

                        <p>Equipe de classe</p>
                        <div class="pt-0 mb-3">
                            <select  wire:model.defer='equipe_id' value="{{old('equipe_id')}}"
                                     class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none form-select focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100">
                                <option value=""></option>
                                
                                @foreach ($equipes as $equipe)
                                    <option value="{{$equipe->id}}">{{$equipe->nom }}</option>
                                @endforeach
                                
                            </select>
                            @error('equipe_id')
                                <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('equipe_id') }}  </div>
                            @enderror
                        </div>

                       

                        <div class="flex justify-end">
                            <button 
                                wire:click.prevent='@if($edit_mode) updateRepartition({{$repartition_id}})  @else createRepartition() @endif '
                                class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none ease-linearbg-emerald-500 bg-myblue hover:shadow-lg focus:outline-none" type="submit">
                                    @if($edit_mode) Mettre à jour  @else  Enregistrer @endif
                            </button>
                        </div>
        
                    </form>  --}}

                    @if ($equipes->isNotEmpty())
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 table-auto">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Equipe
                                        </th>
                                        <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Salle
                                        </th>
                                        <th scope="" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($equipes as $equipe)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    
                                                    <div class="ml-4">
                                                        <div class="font-bold text-gray-900 text-md">
                                                            {{$equipe->nom}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            
                                            <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                <div class="font-bold text-gray-900 text-md">

                                                    @if ($equipe->currentSalle())
                                                        
                                                        {{$equipe->currentSalle()->libelle}}
                                                    
                                                    @else

                                                        <div class="pt-0 mb-3">
                                                            <select  wire:model.defer='salle_id' value="{{old('salle_id')}}"
                                                                    class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none form-select focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100">
                                                                <option value=""></option>
                                                                
                                                                @foreach ($salles as $salle)
                                                                    
                                                                    @if ($salle->canRecieve())
                                                                        <option value="{{$salle->id}}">{{$salle->libelle}}</option>
                                                                    @endif
                                                                   
                                                                @endforeach
                                                                
                                                            </select>
                                                            @error('salle_id')
                                                                <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('salle_id') }}  </div>
                                                            @enderror
                                                        </div>

                                                    @endif
                                                    
                            
                                                </div>
                                                
                                            </td>

                                            <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                
                                                <div class="flex">

                                                    @if (!$equipe->currentSalle())
                                                    
                                                        <a  class="px-2 text-indigo-600 cursor-pointer hover:text-indigo-900" 
                                                                wire:click="linkRepartition({{$equipe->id}})"
                                                            >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                                            </svg> 
                                                        </a>

                                                    @else

                                                        <a  class="px-2 text-red-600 cursor-pointer hover:text-red-900" 
                                                            wire:click="deleteRepartition({{$equipe->id}})"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                            </svg>
                                                        </a>


                                                    @endif
                                                    
                                                    
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
                            Aucune repartition n'a été enregistrée
                        </div>
                    @endif

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
                                    
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Salle
                                    </th>
                                    <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Equipes
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
                                        
                                        
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            <div class="font-bold text-gray-900 text-md">
                                                
                                                @foreach ($salle->currentEquipes() as  $equipe)
                                                    {{$equipe->Equipe()->nom }} |                                                    
                                                @endforeach

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
                        {{$repartitions->links()}}
                    </div>
                @else
                    <div class="flex items-center justify-center w-full h-full text-2xl font-bold ">
                        Aucune repartition n'a été enregistrée
                    </div>
                @endif

            </div>

        </div>

    </div>

</div>
