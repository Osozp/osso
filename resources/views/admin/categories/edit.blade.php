<x-admin-layout>
    
    <form action="{{route('admin.categories.update', $category)}}" 
        method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        
       
        @csrf
        @method('PUT')

        <x-validation-errors class="mb-4"/>

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre de la categoria
            </x-label>
            <x-input 
                name="name"
                class="w-full" 
                placeholder="Esriba nombre de categoria"
                value="{{ $category->name }}"/>
        </div>
        <div class="flex justify-end">
            <x-danger-button class="mr-2" onclick="deleteCategory()">
                Eliminar
            </x-danger-button>
            <x-button>
                Actualiza Categoria
            </x-button>
        </div>
    </form>

    <form action="{{route('admin.categories.update', $category)}}" 
        method="post"
        id="formDelete">

        @csrf
        @method('DELETE')

    </form>
    @push('js')
        <script>
            function deleteCategory(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>
    @endpush
</x-admin-layout>