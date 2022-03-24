<x-app-layout>

    <div class="py-6">
        
        <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                
                <div x-data="Tabsetup()" class="w-full h-full">
                    <ul class="flex items-center justify-center mt-2 mb-4">
                        <template x-for="(tab, index) in tabs" :key="index">
                            <li class="px-4 text-gray-500 border-b-8 cursor-pointer"
                                :class="activeTab===index ? 'text-orange border-orange' : '' " @click="activeTab = index"
                                x-text="tab"></li>
                        </template>
                    </ul>

                    @if ($message = Session::get('success'))
                        <div class="flex justify-center py-4">
                            
                            <div
                                class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                            
                                <div class="flex items-center justify-center w-12 bg-green-500">
                                    <svg
                                    class="w-6 h-6 text-white fill-current"
                                    viewBox="0 0 40 40"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                                    />
                                    </svg>
                                </div>
                        
                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <p class="text-sm text-gray-600 dark:text-gray-200">
                                        {{$message}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    @endif 
            
                    
                    
                    <div class="w-full h-full bg-white">
                        
                        <div x-show="activeTab===0" >
                            @livewire('admin.restauration.commande')
                        </div>
                        
                        <div x-show="activeTab===1" >
                            
                            <div class="px-2 py-4  md:py-2">
                                <div class=" gap-8 md:grid md:grid-cols-6 " >
                         
                                 <div class="col-span-2 px-2  ">
                                     @livewire('admin.restauration.qrcode')
                                 </div>
                         
                                 <div class="font-bold md:col-span-4">
                                       

                                    <div class="flex flex-col w-full">
                                        <div class="w-full -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block w-full min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                                <div class="w-full border-b border-gray-200 shadow overflow-x sm:rounded-lg">
                                                
                                                    <table class="min-w-full divide-y divide-gray-800">
                                                        <thead class="bg-gray-100">
                                                            <tr>
                                                            
                                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                    Intitulé du repas
                                                                </th>
                                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                    
                                                                </th>
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            @foreach ($repas as $repa)
                                                            <tr>
                                                                
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                    
                                                                        <div class="ml-4">
                                                                            <div class="text-sm font-extrabold text-gray-900">
                                                                                {{$repa->libelle }} 
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </td>
                        
                                                                <td class="px-6 py-4 text-xl whitespace-nowrap">
                                                                    {{$repa->restauration()->count()}}  / {{$nb_participants}}   
                                                                </td>
                                                                
                                                                                                                             
                                                                
                                                            </tr>
                                                            @endforeach
                                                
                                                            
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                                <div class="flex justify-end py-2">
                                                    {{$repas->links()}}
                                                </div>
                                            </div>
                                        
                                        </div>
                        
                                    </div>

                                 </div>
                         
                                </div>
                             </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="flex justify-center gap-4 p-2 border-t">
                        <button
                            class="px-4 py-2 text-sm font-bold uppercase border rounded-md cursor-pointer text-orange border-orange hover:bg-orange hover:text-white hover:shadow"
                            @click="activeTab--" x-show="activeTab>0"
                            >Précédent</button>
                        <button
                            class="px-4 py-2 text-sm font-bold uppercase border rounded-md cursor-pointer border-orange text-orange hover:bg-orange hover:text-white hover:shadow"
                            @click="activeTab++" x-show="activeTab<tabs.length-1"
                            >Suivant</button>
                    </div>
                </div>
                

            </div>
        </div>
    </div>


    <x-slot name="scripts" >

        <script src="{{ asset('js/vue.js') }}"></script>
        <script src="{{ asset('js/vueQrCode.js') }}" ></script>
        <script>
            var app = new Vue({
                el: '#app',
                methods: {
                    onDecode (decodedString) {
                        this.message = decodedString;
                        this.seen = true 
                        document.getElementById("Qrcodevalue").value = this.message
                    }
                },
                data: {
                    message: 'Hello Vue!',
                    seen: false
                }
            })
        </script>
        
        <script>
            function Tabsetup() {
                return {
                activeTab: 1,
                tabs:['Commandes', 'Restaurant']
                
                };
            };


            
        </script>
    </x-slot>

</x-app-layout>