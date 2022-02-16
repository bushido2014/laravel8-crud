<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
<div class="max-w-5xl mx-auto flex justify-between py-6">
   
       
            <div class="pull-left">
                <h2 class="order-1 text-gray-900 text-3xl font-extrabold tracking-tight mt-2">Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="button button--blue" href="{{ route('products.index') }}"> Back</a>
            </div>
        
</div>  
<div class="max-w-5xl mx-auto flex justify-between bg-red-600 text-white">  
    @if ($errors->any())
        <div class="callout alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="py-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div class="max-w-5xl mx-auto flex justify-between py-6">
    <form action="{{ route('products.store') }}" method="POST" class="max-w-3xl w-full" enctype="multipart/form-data">
        @csrf
    
         <div class="w-full block">
            <div class="my-2 w-full">
                
                <label class="block text-base font-medium text-gray-700 mb-1">Name: </label>
                    <input type="text" name="name" class="w-full rounded" placeholder="Name">
                
            </div>
            <div class="my-2 w-full">
                
                <label class="block text-base font-medium text-gray-700 mb-1">Add Image: </label>
                    <input type="file" name="image" placeholder="Image" class="w-full rounded">
                    
            </div> 
            <div class="my-2 w-full">
                <label class="block text-base font-medium text-gray-700 mb-1">Detail</label>
                    <textarea class="w-full mb-2 rounded" style="height:150px" name="detail" placeholder="Detail"></textarea>    
            </div>
            <div class="my-2 w-full">
                <button type="submit" class="button w-full button--blue">Submit</button>
                </div>
        </div>
    
    </form>
</div>
</x-app-layout>