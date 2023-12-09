<x-admin-layout>
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush
    crear producto
    <form action="{{route('admin.products.store')}}" 
        method="POST" class="bg-white rounded-lg p-6 shadow-lg"
        x-data="data()"
        x-init="$watch('title', value => {string_to_slug(value)})"
        enctype="multipart/form-data">
        
        @csrf

        <x-validation-errors class="mb-4"/>

        <div class="mb-4">
            <x-label class="mb-2">Marca</x-label>
            <x-select name="category_id" class="w-full">
                @foreach ($categories as $category)
                    <option @selected(old('category_id')==$category->id)
                        value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </x-select>

            <x-label class="mb-2 mt-4">Nombre del Producto</x-label>
            <x-input name="title" x-model="title" class="w-full" placeholder="Esriba nombre de categoria"/>

            <x-label class="mb-2 mt-4">ruta</x-label>
            <x-input name="slug" x-model="slug" class="w-full" placeholder="ruta"/>

            <div class="flex justify-stretch">
                <div class="w-1/2">
                    <x-label class="mb-2 mt-4">Codigo del producto</x-label>
                    <x-input name="sku" class="w-full" placeholder="Codigo"/>
                </div>
                <div class="w-1/2"> 
                    <x-label class="mb-2 mt-4">Cantidad</x-label>
                    <x-input name="stock" class="w-full" placeholder="Stock"/>
                </div>
            </div>
            <div class="flex justify-stretch">
                <div class="w-1/2">
                    <x-label class="mb-2 mt-4">Precio de compra</x-label>
                    <x-input name="purchase_price" class="w-full" placeholder="a cuanto compraste"/>
                </div>
                <div class="w-1/2">
                    <x-label class="mb-2 mt-4">Precio de venta</x-label>
                <x-input name="price" class="w-full" placeholder="a cuanto vendes"/>
                </div>
            </div >

            {{-- <x-label class="mb-2 mt-4">tallas</x-label>
            <x-input name="sizes" class="w-full" placeholder="tallas"/> --}}
            
            <x-label class="mb-2 mt-4">Descripcion</x-label>
            <x-input name="description" class="w-full" placeholder="descripcion"/>
        </div>
        <div class="flex justify-end">
            <x-button>
                Crear Producto
            </x-button>
        </div>
    </form>

    @push('js')
        <script>
            function data(){
                return {
                    title:'',
                    slug:'',
                    string_to_slug(str){
                        str = str.replace(/^\s+|\s+$/g, '');
                        str = str.toLowerCase();
                        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                        var to = "aaaaeeeeiiiioooouuuunc------";
                        for (var i = 0, l = from.length; i < l; i++) {
                            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                        }
                        str = str.replace(/[^a-z0-9 -]/g, '')
                            .replace(/\s+/g, '-')
                            .replace(/-+/g, '-');
                        this.slug = str;
                    }
                }
            }
        </script>
    @endpush
</x-admin-layout>