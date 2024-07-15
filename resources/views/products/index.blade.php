<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
    <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg fade-in max-w-4xl w-full">
        <h1 class="text-2xl font-bold mb-4">Product</h1>
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        
        <div class="mb-4">
            <a href="{{ route('product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create a Product</a>
        </div>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Qty</th>
                    <th class="py-3 px-6 text-left">Price</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-left">Edit</th>
                    <th class="py-3 px-6 text-left">Delete</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($products as $product)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $product->id }}</td>
                        <td class="py-3 px-6 text-left">{{ $product->name }}</td>
                        <td class="py-3 px-6 text-left">{{ $product->qty }}</td>
                        <td class="py-3 px-6 text-left">{{ $product->price }}</td>
                        <td class="py-3 px-6 text-left">{{ $product->description }}</td>
                        <td class="py-3 px-6 text-left">
                            <a href="{{ route('product.edit', ['product' => $product]) }}" class="text-blue-600 hover:underline">Edit</a>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="text-red-600 hover:underline cursor-pointer"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
