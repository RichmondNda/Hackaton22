<div>
    
    <div class="px-4 py-5 ">

        <div class="md:grid md:grid-cols-6 gap-4">

            <div class="col-span-2 ">
                
               <div>
                    <div class="font-bold text-center text-md">
                        Enregistrer un repas
                    </div>

                    <div class="px-6 mt-6">
                        <form method="POST">
                            @csrf
                            
                            <div class="pt-0 mb-3">
                                <label class="font-bold ">libelle du repas </label>
                                <input type="text" placeholder="Vendredi Midi"   wire:model.defer='libelle_repas' value="{{old("libelle_repas")}}"
                                class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100" />
                                    @error('libelle_repas')
                                        <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('libelle_repas') }}  </div>
                                    @enderror
                            </div>    
                            
                            <div class="flex justify-end">
                                <button 
                                    wire:click.prevent=' createRepas()  '
                                    class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none ease-linearbg-emerald-500 bg-myblue hover:shadow-lg focus:outline-none" type="submit">
                                      Enregistrer 
                                </button>
                            </div>
            
                        </form> 
                    </div>
               </div>

               <div>
                <div class="font-bold text-center text-md">
                    Enregistrer une collation
                </div>

                <div class="px-6 mt-6">
                    <form method="POST">
                        @csrf
                        
                        <div class="pt-0 mb-3">
                            <label class="font-bold ">libelle de la collation </label>
                            <input type="text" placeholder="Café au lait"   wire:model.defer='libelle_col' value="{{old("libelle_col")}}"
                            class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100" />
                                @error('libelle_col')
                                    <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('libelle_col') }}  </div>
                                @enderror
                        </div>    
                        
                        <div class="flex justify-end">
                            <button 
                                wire:click.prevent=' createCollation() '
                                class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 rounded shadow outline-none ease-linearbg-emerald-500 bg-myblue hover:shadow-lg focus:outline-none" type="submit">
                                    Enregistrer 
                            </button>
                        </div>
        
                    </form> 
                </div>
           </div>
            

            </div>
            <div class="col-span-2 ">
                
                @if ($repas->isNotEmpty())
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 table-auto">
                                <thead class="bg-gray-50">
                                <tr>
                                    
                                    <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        libelle
                                    </th>
                                    
                                    <th scope="" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($repas as $rep)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                
                                                <div class="ml-4">
                                                    <div class="font-bold text-gray-900 text-md">
                                                        {{$rep->libelle}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            
                                            <div class="flex">
                                                

                                                <a  class="px-2 text-red-600 cursor-pointer hover:text-red-900" 
                                                    wire:click="deleteRepas({{$rep->id}})"
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
                        {{$repas->links()}}
                    </div>
                @else
                    <div class="flex items-center justify-center w-full h-full text-2xl font-bold ">
                        Aucun repas n'a été enregistrée
                    </div>
                @endif

            </div>

            <div class="col-span-2 ">
                
                @if ($collations->isNotEmpty())
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 table-auto">
                                <thead class="bg-gray-50">
                                <tr>
                                    
                                    <th scope="col-span-2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        libelle
                                    </th>
                                    
                                    <th scope="" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($collations as $collation)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                
                                                <div class="ml-4">
                                                    <div class="font-bold text-gray-900 text-md">
                                                        {{$collation->libelle}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                      
                                        

                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            
                                            <div class="flex">
                                              
                                                <a  class="px-2 text-red-600 cursor-pointer hover:text-red-900" 
                                                    wire:click="deleteCollation({{$collation->id}})"
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
                        {{$collations->links()}}
                    </div>
                @else
                    <div class="flex items-center justify-center w-full h-full text-2xl font-bold ">
                        Aucune collation n'a été enregistrée
                    </div>
                @endif

            </div>

        </div>

    </div>

</div>
