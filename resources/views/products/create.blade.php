<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('https://th.bing.com/th/id/R.73a4dbcfb21b0a7f5b557cd74123aa86?rik=tenodqKv7Qeo5A&riu=http%3a%2f%2fwww.graciemag.com%2fwp-content%2fuploads%2f2014%2f12%2fGM-White-Page-214.jpg&ehk=DMBACS3MXitKXwcFcRURKIF41VIrN0%2bqNGeYt9sNGtg%3d&risl=1&pid=ImgRaw&r=0');
            background-size: cover;
            background-position: center;
        }
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="background-image h-screen flex items-center justify-center">
    <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg fade-in max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-4">Create a New Product</h1>
        <div>
            @if($errors->any())
            <ul class="text-red-500 mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="qty" class="block text-gray-700 font-bold mb-2">Quantity:</label>
                <input type="number" id="qty" name="qty" placeholder="Enter quantity" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
                <input type="text" id="price" name="price" placeholder="Enter price" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea id="description" name="description" placeholder="Enter description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save New Product</button>
            </div>
        </form> 
    </div>
</body>
</html>
