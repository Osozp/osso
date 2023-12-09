<x-admin-layout>
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush

    Editar producto

    <div>
        <form action="{{route('admin.products.file', $product)}}"
        method="POST"
        class="dropzone"
        id="my-awesome-dropzone">@csrf</form>
    </div>
    @if ($product->images)
        <section class="bg-white shadow-xl rounded-lg p-6 mb-4">
            <h3 class="text-2xl text-center font-semibold mb-2">Imagenes del producto</h3>
            <ul class="flex flex-wrap">
                @foreach ($product->images as $image)
                    <li class="relative">
                        <img src="{{ Storage::url($image->url)}}" class="w-32 h-30 object-cover">
                        
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    <form action="{{route('admin.products.update', $product, $categories)}}"
        method="POST" class="bg-white rounded-lg p-6 shadow-lg">
        
        @csrf
        @method('PUT')

        <x-validation-errors class="mb-4"/>

        <div class="mb-4">
            <x-label class="mb-2">Marca</x-label>
            <x-select name="category_id" class="w-full">
                @foreach ($categories as $category)
                    <option 
                        @selected(old('category_id', $product->category_id)==$category->id)
                        value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </x-select>

            <x-label class="mb-2 mt-4">Nombre del Producto</x-label>
            <x-input 
                value="{{ old('title', $product->title) }}"
                name="title" 
                class="w-full" placeholder="Esriba nombre de categoria"
                />

            <x-label class="mb-2 mt-4">ruta</x-label>
            <x-input value="{{ old('title', $product->slug) }}" name="slug"  class="w-full" placeholder="ruta"/>

            <div class="flex justify-stretch">
                <div class="w-1/2">
                    <x-label class="mb-2 mt-4">Codigo del producto</x-label>
                    <x-input value="{{ old('title', $product->sku) }}" name="sku" class="w-full" placeholder="Codigo"/>
                </div>
                <div class="w-1/2"> 
                    <x-label class="mb-2 mt-4">Cantidad</x-label>
                    <x-input value="{{ old('title', $product->stock) }}" name="stock" class="w-full" placeholder="Stock"/>
                </div>
            </div>
            <div class="flex justify-stretch">
                <div class="w-1/2">
                    <x-label class="mb-2 mt-4">Precio de compra</x-label>
                    <x-input value="{{ old('title', $product->purchase_price) }}" name="purchase_price" class="w-full" placeholder="a cuanto compraste"/>
                </div>
                <div class="w-1/2">
                    <x-label class="mb-2 mt-4">Precio de venta</x-label>
                <x-input value="{{ old('title', $product->price) }}" name="price" class="w-full" placeholder="a cuanto vendes"/>
                </div>
            </div>

            

            <x-label class="mb-2 mt-4">tallas</x-label>
            <select class="tag-multiple" name="tags[]" multiple="multiple" style="width:100%">
                @foreach ($product->tags as $tag)
                    <option value="{{$tag->name}}" selected>
                        {{$tag->name}}
                    </option>
                @endforeach
            </select>

            <x-label class="mb-2 mt-4">Descripcion</x-label>
            <x-input value="{{ old('title', $product->description) }}" name="description" class="w-full" placeholder="descripcion"/>
        </div>
        <div class="flex justify-end">
            <x-button>
                Editar Producto
            </x-button>
        </div>
    </form>

    @push('js')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.tag-multiple').select2({
                    tags: true,
                    tokenSeparators: [',',' '],
                    ajax:{
                        url:"{{route('api.tags.index')}}",
                        dataType: 'json',
                        delay: 250,
                        data: function(params){
                            return {
                                term: params.term
                            }
                        },
                        processResults: function(data) {
                            return {
                                results:data
                            }
                        },
                    }
                });
            });
        </script>
            
        <script>
            Dropzone.options.myAwesomeDropzone = { // camelized version of the `id`
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 4, // MB
                
            };
        </script>
    @endpush
</x-admin-layout>