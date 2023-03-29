<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Product') }}
        </h2>
    </x-slot>

 <div class="max-w-7xl mx-auto flex justify-end py-6">
      
        <div class="pull-right my-4">
            <a class="button button--blue" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>

    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
             <h2 class="text-3xl mb-2">{{ $product->name }}</h2>
        <div>
           <p class="text-base">{{ $product->detail }}</p>
        <div>
    </div>
        </div>
    </div>



</x-app-layout>
