<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Edit Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <form method="POST" action="{{ route('product.update') }}">
                         @csrf
                         @method('PUT')
                        Name 
                        <div class="mb-2" w-80>
                            <x-input-label for="name" :value=__('Nama Product')/>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>
                        Description
                        <div class="mb-2" w-80>
                            <x-input-label for="description" :value=__('description')/>
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required/>
                            <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                        </div>
                        Price
                        <div class="mb-2" w-80>
                            <x-input-label for="price" :value=__('price')/>
                            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required/>
                            <x-input-error :messages="$errors->get('price')" class="mt-2"/>
                        </div>
                        Stock
                        <div class="mb-2" w-80>
                            <x-input-label for="stock" :value=__('stock')/>
                            <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock" :value="old('stock')" required/>
                            <x-input-error :messages="$errors->get('stock')" class="mt-2"/>
                           <x-primary-button class="mt-4">
                            {{ __('Simpan') }}
                           </x-primary-button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
