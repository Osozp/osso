<x-admin-layout>
    
    <form action="{{route('admin.categories.store')}}" 
        method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        
        @csrf

        <x-validation-errors class="mb-4"/>

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre de la categoria
            </x-label>
            <x-input 
                name="name"
                class="w-full" 
                placeholder="Esriba nombre de categoria"/>
        </div>
        <div class="flex justify-end">
            <x-button>
                Crear Categoria
            </x-button>
        </div>
    </form>

</x-admin-layout>