<x-admin-layout>
    <div class="flex justify-end mb-4">
         <x-button>
            <a href="{{route('admin.products.create')}}">Nuevo Producto</a>
         </x-button>
    </div>
    
     <div class="relative overflow-x-auto mb-4 ">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                 <tr>
                    <th scope="col" class="px-6 py-3">
                        marca
                    </th>
                    <th scope="col" class="px-6 py-3">
                        sku
                    </th>
                    <th scope="col" class="px-6 py-3">
                        titulo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        cantidad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        tallas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        publicado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        acciones
                    </th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($products as $product)
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                     {{-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         {{$product->id }}
                     </th> --}}
                     <td class="px-6 py-4">
                         {{ $product->category->name }}
                     </td>
                     <td class="px-6 py-4">
                        {{$product->sku}}
                    </td>
                    <td class="px-6 py-4">
                        {{$product->title}}
                    </td>
                    <td class="px-6 py-4">
                        {{$product->stock}}
                    </td>
                    <td class="px-6 py-4">
                        @foreach ($product->tags as $tag)
                            {{$tag->name}}
                        @endforeach
                       
                    </td>
                    <td class="px-6 py-4">
                        {{$product->price}}
                    </td>
                    <td class="px-6 py-4">
                        {{$product->description}}
                    </td>
                    <td class="px-6 py-4">
                        <span @class([
                            'bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300' => $product->published,
                            'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300' => ! $product->published])>
                            {{$product->published ? 'Habilitado' : 'Desabilitado'}}
                        </span>
                    </td>
                     <td class="px-6 py-4">
                         <a href="{{route('admin.products.edit',$product)}}">Editar</a>
                     </td>
                 </tr>
                 @endforeach
                 
             </tbody>
         </table>
     </div>
     <div class="mt-4">
         {{$products->links()}}
     </div>
 </x-admin-layout>