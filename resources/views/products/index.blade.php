
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Products') }}
      </h2>
  </x-slot>

<div class="max-w-7xl mx-auto">
<div class="my-4">
    <div class="inline-flex rounded-md shadow">
        <a href="{{ route('products.create') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
          Get started
        </a>
      </div>

</div>
</div>

<x-success-message />

<div class="max-w-7xl mx-auto">
<table class="table-auto border-2">
    <thead class="bg-gray-50">
      <tr class="border-2">
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NAME</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DETAIL</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IMAGE</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ACTION</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($products as $product)
        <tr>
            <td class="px-6 py-4">{{ $product->id }}</td>
            <td class="px-6 py-4">{{ $product->name }}</td>
            <td class="px-6 py-4">{{ $product->detail }}</td>
            <td class="px-6 py-4"><img src="/image/{{ $product->image }}" width="100px"></td>
            <td class="px-6 py-4" width="270">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="flex justify-around">
                    <a class="button button--gray" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="button button--blue" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button button--red">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
  <div class="max-w-7xl mx-auto py-4">
  {{ $products->links() }}
</div>

</x-app-layout>
