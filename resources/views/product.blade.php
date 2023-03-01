<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-2 px-2 sm:px-8">
        <h1 class="text-2xl font-extrabold text-gray-700 my-2">Products</h1>

        <button class="mt-2 mb-8">
            <a href="{{ route('addproduct') }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Add Product</a>
        </button>
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                <span class="font-medium">{{ session('message')}} </span>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
    
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-center text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $product->product_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->product_description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->product_price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->product_color }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->product_quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->product_size }}
                        </td>
                        <td class="px-6 py-4 flex">
                            {{-- memanggil gambar di storage --}}
                            <img src="{{ asset('storage/productimage/'.$product->image_front) }}" alt="" width="100px">
                            <img src="{{ asset('storage/productimage/'.$product->image_back) }}" alt="" width="100px">
                            <img src="{{ asset('storage/productimage/'.$product->image_left) }}" alt="" width="100px">
                            <img src="{{ asset('storage/productimage/'.$product->image_right) }}" alt="" width="100px">
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="editproduct/{{ $product->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="deleteproduct/{{ $product->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>