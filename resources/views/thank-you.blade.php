<x-site-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You for Your Order</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to your styles -->
        <!-- Tailwind CSS CDN for styling -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="text-center">
                <svg class="w-16 h-16 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7M5 13l4-4m-4 4L19 7m-14 0h0"></path>
                </svg>
                <h1 class="text-3xl font-semibold text-gray-800 mb-4">Thank You for Your Order!</h1>
                <p class="text-lg text-gray-600 mb-6">We have received your order and it’s being processed. We’ll send you an email with your order details shortly.</p>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Order Summary:</h2>
                    <ul class="list-disc list-inside mb-4">
                        <li class="text-gray-600">Order ID: <span class="font-medium">{{ $order->id }}</span></li>
                        <li class="text-gray-600">Order Total: <span class="font-medium">Rs.{{ number_format($order->total, 2) }}</span></li>
                        <li class="text-gray-600">Shipping Address: <span class="font-medium">{{ $order->address }}, {{ $order->city }}, {{ $order->zip }}</span></li>
                    </ul>
                </div>


                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Need Assistance?</h2>
                    <p class="text-gray-600 mb-4">If you have any questions, feel free to <a href="{{ url('/contact') }}" class="text-blue-500 hover:underline">contact our support team</a>.</p>
                    <a href="{{ url('/') }}" class="inline-block bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
</x-site-layout>
