<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Checkout - Gadzey</h1>

  <form wire:submit.prevent='placeOrder'>
    <div class="grid grid-cols-12 gap-6">
      <!-- LEFT: Shipping Form -->
      <div class="col-span-12 lg:col-span-8">
        <div class="bg-white shadow-lg rounded-xl p-6 dark:bg-slate-900">
          <h2 class="text-xl font-bold text-gray-700 dark:text-white mb-4 underline">Shipping Address</h2>

          <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
              <label for="first_name" class="text-gray-600 dark:text-white">First Name</label>
              <input wire:model='first_name' type="text" id="first_name"
                class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('first_name') border-red-500 @enderror">
              @error('first_name') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
              <label for="last_name" class="text-gray-600 dark:text-white">Last Name</label>
              <input wire:model='last_name' type="text" id="last_name"
                class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('last_name') border-red-500 @enderror">
              @error('last_name') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="mb-4">
            <label for="phone" class="text-gray-600 dark:text-white">Phone</label>
            <input wire:model='phone' type="text" id="phone"
              class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('phone') border-red-500 @enderror">
            @error('phone') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
          </div>

          <div class="mb-4">
            <label for="address" class="text-gray-600 dark:text-white">Address</label>
            <input wire:model='street_address' type="text" id="address"
              class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('street_address') border-red-500 @enderror">
            @error('street_address') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
          </div>

          <div class="mb-4">
            <label for="city" class="text-gray-600 dark:text-white">City</label>
            <input wire:model='city' type="text" id="city"
              class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('city') border-red-500 @enderror">
            @error('city') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
          </div>

          <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
              <label for="state" class="text-gray-600 dark:text-white">State</label>
              <input wire:model='state' type="text" id="state"
                class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('state') border-red-500 @enderror">
              @error('state') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
              <label for="zip_code" class="text-gray-600 dark:text-white">ZIP Code</label>
              <input wire:model='zip_code' type="text" id="zip_code"
                class="w-full mt-1 border rounded-lg px-3 py-2 dark:bg-gray-700 dark:text-white @error('zip_code') border-red-500 @enderror">
              @error('zip_code') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>
          </div>

          <h3 class="text-lg font-semibold mb-2">Select Payment Method</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <label class="flex items-center justify-between border rounded-lg p-4 cursor-pointer bg-gray-50 peer-checked:border-blue-600 peer-checked:bg-blue-50 dark:bg-gray-800 dark:text-gray-300">
              <input type="radio" wire:model="payment_method" value="cod" class="hidden peer" />
              <span class="font-semibold text-gray-700 dark:text-white">Cash on Delivery</span>
            </label>

            <label class="flex items-center justify-between border rounded-lg p-4 cursor-pointer bg-gray-50 peer-checked:border-blue-600 peer-checked:bg-blue-50 dark:bg-gray-800 dark:text-gray-300">
              <input type="radio" wire:model="payment_method" value="stripe" class="hidden peer" />
              <span class="font-semibold text-gray-700 dark:text-white">Stripe</span>
            </label>
          </div>
          @error('payment_method') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
        </div>
      </div>

      <!-- RIGHT: Order Summary -->
      <div class="col-span-12 lg:col-span-4">
        <div class="bg-white shadow-lg rounded-xl p-6 dark:bg-slate-900 mb-4">
          <h2 class="text-xl font-bold text-gray-700 dark:text-white underline mb-4">ORDER SUMMARY</h2>
          <div class="flex justify-between mb-2"><span>Subtotal</span><span>{{ Number::currency($grand_total, 'LKR') }}</span></div>
          <div class="flex justify-between mb-2"><span>Taxes</span><span>{{ Number::currency(0, 'LKR') }}</span></div>
          <div class="flex justify-between mb-2"><span>Shipping</span><span>{{ Number::currency(0, 'LKR') }}</span></div>
          <hr class="my-4 border-gray-300">
          <div class="flex justify-between text-lg font-bold text-blue-700"><span>Grand Total</span><span>{{ Number::currency($grand_total, 'LKR') }}</span></div>
        </div>

        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-semibold text-lg transition">
          <span wire:loading.remove>Place Order</span>
          <span wire:loading>Processing...</span>
        </button>

        <div class="bg-white mt-6 shadow-lg rounded-xl p-6 dark:bg-slate-900">
          <h2 class="text-xl font-bold text-gray-700 dark:text-white underline mb-4">BASKET SUMMARY</h2>
          <ul class="space-y-4">
            @foreach ($cart_items as $ci)
              <li class="flex items-center gap-4" wire:key="{{ $ci['product_id'] }}">
                <img src="{{ url('storage', $ci['image']) }}" class="w-12 h-12 rounded-full" alt="{{ $ci['name'] }}">
                <div class="flex-1">
                  <p class="text-gray-800 dark:text-white font-medium">{{ $ci['name'] }}</p>
                  <p class="text-sm text-gray-500 dark:text-gray-400">Qty: {{ $ci['quantity'] }}</p>
                </div>
                <div class="text-right font-semibold text-gray-800 dark:text-white">
                  {{ Number::currency($ci['total_amount'], 'LKR') }}
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </form>
</div>
