<div class="bg-gradient-to-b from-blue-50 via-white to-white py-12 px-4 sm:px-8 lg:px-20 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-700 mb-10">🛒 Your Shopping Cart</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    @if(count($cart_items) > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-gray-700">
                                <thead>
                                    <tr class="border-b text-blue-600">
                                        <th class="py-3">Product</th>
                                        <th class="py-3">Price (LKR)</th>
                                        <th class="py-3">Quantity</th>
                                        <th class="py-3">Total</th>
                                        <th class="py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y">
                                    @foreach ($cart_items as $item)
                                        <tr wire:key="{{ $item['product_id'] }}" class="hover:bg-blue-50 transition">
                                            <td class="py-4 flex items-center gap-4">
                                                <img src="{{ url('storage', $item['image']) }}" alt="{{ $item['name'] }}" class="w-14 h-14 rounded-lg shadow-md">
                                                <span class="font-medium">{{ $item['name'] }}</span>
                                            </td>
                                            <td>{{ Number::currency($item['unit_amount'], 'LKR') }}</td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <button wire:click="decreaseQty({{ $item['product_id'] }})" class="bg-blue-100 px-3 py-1 rounded hover:bg-blue-200">-</button>
                                                    <span class="font-semibold">{{ $item['quantity'] }}</span>
                                                    <button wire:click="increaseQty({{ $item['product_id'] }})" class="bg-blue-100 px-3 py-1 rounded hover:bg-blue-200">+</button>
                                                </div>
                                            </td>
                                            <td class="font-semibold">{{ Number::currency($item['total_amount'], 'LKR') }}</td>
                                            <td>
                                                <button wire:click="removeItem({{ $item['product_id'] }})"
                                                        class="text-red-600 hover:text-white hover:bg-red-500 border border-red-300 rounded px-3 py-1 transition">
                                                    <span wire:loading.remove wire:target="removeItem({{ $item['product_id'] }})">Remove</span>
                                                    <span wire:loading wire:target="removeItem({{ $item['product_id'] }})">Removing...</span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-10 text-xl text-gray-500 font-semibold">
                            🚫 Your cart is currently empty!
                        </div>
                    @endif
                </div>
            </div>

            <!-- Summary Card -->
            <div>
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-10">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Summary</h3>
                    <div class="flex justify-between mb-3">
                        <span>Subtotal</span>
                        <span>{{ Number::currency($grand_total, 'LKR') }}</span>
                    </div>
                    <div class="flex justify-between mb-3">
                        <span>Tax</span>
                        <span>LKR 0.00</span>
                    </div>
                    <div class="flex justify-between mb-3">
                        <span>Shipping</span>
                        <span>LKR 0.00</span>
                    </div>
                    <hr class="my-3">
                    <div class="flex justify-between font-bold text-lg text-blue-700">
                        <span>Grand Total</span>
                        <span>{{ Number::currency($grand_total, 'LKR') }}</span>
                    </div>

                    @if(count($cart_items) > 0)
                        <a href="/checkout" class="mt-6 block text-center bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                            Proceed to Checkout
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
