<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-2 px-2 sm:px-8">
        <h2 class="text-2xl font-extrabold text-gray-700 my-2">Buat Product Baru</h2>
        <form action="insertproduct" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
                <input type="text" id="product_name" name="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name" required>
            </div>
            <div class="mb-2">
                <label for="product_description" class="block mb-2 text-sm font-medium text-gray-900">Product Desc</label>
                <input type="text" id="product_description" name="product_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Desc" required>
            </div>
            <div class="mb-2">
                <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900">Product Price</label>
                <input type="number" id="product_price" name="product_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Price" required>
            </div>
            <div class="mb-2">
                <label for="product_color" class="block mb-2 text-sm font-medium text-gray-900">Product Color</label>
                <input type="text" id="product_color" name="product_color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Color" required>
            </div>
            <div class="mb-2">
                <label for="product_quantity" class="block mb-2 text-sm font-medium text-gray-900">Product Quantity</label>
                <input type="number" id="product_quantity" name="product_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Quantity" required>
            </div>
            <div class="mb-2">
                <label for="product_size" class="block mb-2 text-sm font-medium text-gray-900">Product Size</label>
                <div class="flex items-center justify-between w-[500px]">
                    <div>
                    <input id="product_size" type="radio" value="S" name="product_size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="product_size" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">S</label>
                    </div>
                    <div>
                    <input id="product_size" type="radio" value="M" name="product_size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="product_size" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">M</label>
                    </div>
                    <div>
                    <input id="product_size" type="radio" value="L" name="product_size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="product_size" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">L</label>
                    </div>
                    <div>
                    <input id="product_size" type="radio" value="XL" name="product_size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="product_size" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">XL</label>
                    </div>
                    <div>
                    <input id="product_size" type="radio" value="XXL" name="product_size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="product_size" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">XXL</label>
                    </div>
                </div>
                    {{-- <input type="text" id="product_size" name="product_size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Size" required> --}}
            </div>
            <div class="mb-2">
                <label for="image_front" class="block mb-2 text-sm font-medium text-gray-900">Front image</label>
                <input type="file" id="image_front" name="image_front" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Image 1" required>
            </div>
            <div class="mb-2">
                <label for="image_back" class="block mb-2 text-sm font-medium text-gray-900">Back Image</label>
                <input type="file" id="image_back" name="image_back" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Image 2" required>
            </div>
            <div class="mb-2">
                <label for="image_left" class="block mb-2 text-sm font-medium text-gray-900">Left image</label>
                <input type="file" id="image_left" name="image_left" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Image 3" required>
            </div>
            <div class="mb-2">
                <label for="image_right" class="block mb-2 text-sm font-medium text-gray-900">Right Image</label>
                <input type="file" id="image_right" name="image_right" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Image 4" required>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
</body>
</html>