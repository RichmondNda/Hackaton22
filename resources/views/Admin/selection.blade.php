<x-app-layout>

    @if ($message = Session::get('danger'))
        <div class="flex justify-center py-4">
            
            <div
                class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-center w-12 bg-red-500">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
        
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-bold text-red-500 dark:text-red-400"
                        >SDI - Hackathon </span
                        >
                        <p class="text-xs text-gray-600 md:text-sm dark:text-gray-200">
                        {{$message}}
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    @endif

    <div class="py-4">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-md py-4 px-4 sm:rounded-lg">
                
                @livewire('admin.groupe.selection')
                
            </div>
        </div>
    </div>

</x-app-layout>