<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
{{-- <div class="grid-x grid-padding-x align-spaced align-middle">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="">
                <a class="button primary float-right " href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div> --}}

    {{-- @if ($errors->any()) --}}
        {{-- <div class="callout alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div> --}}
        
        {{-- <x-auth-validation-errors class="my-4 text-center" :errors="$errors" /> --}}
    {{-- @endif --}}
    <x-validation-errors />
    <div class="max-w-5xl mx-auto flex justify-between py-6">
    <form action="{{ route('products.update',$product->id) }}" method="POST" class="max-w-3xl w-full">
        @csrf
        @method('PUT')

        <div class="w-full block">
            <div class="my-2 w-full">
                
                <label class="block text-base font-medium text-gray-700 mb-1">Name: </label>
                    <input type="text" name="name" value="{{ $product->name }}" placeholder="Name" class="w-full rounded">
            </div>  
            <div class="my-2 w-full">
                <label class="block text-base font-medium text-gray-700 mb-1">Detail</label>
                    <textarea class="w-full mb-2 rounded" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                
              <button type="submit" class="button w-full button--blue">Submit</button>
            </div>
        </div>

    </form>
    </div>
</x-app-layout>
