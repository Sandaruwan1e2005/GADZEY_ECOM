<div class="w-full max-w-[85rem] py-12 px-4 sm:px-8 lg:px-20 mx-auto bg-gradient-to-br from-blue-50 via-white to-white min-h-screen">
  <section class="font-poppins">
    <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-2xl p-8">
      <h1 class="text-3xl font-bold text-blue-700 text-center mb-10">🎉 Thank You! Your Order Has Been Received</h1>

      <!-- Address Info -->
      <div class="mb-10 border-b border-gray-200 pb-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Shipping Address</h2>
        <div class="text-gray-600 space-y-1">
          <p class="text-base font-medium">{{ $order->address->full_name }}</p>
          <p>{{ $order->address->street_address }}</p>
          <p>{{ $order->address->city }}, {{ $order->address->state }} {{ $order->address->zip_code }}</p>
          <p>📞 {{ $order->address->phone }}</p>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border-b border-gray-200 pb-10 mb-10">
        <div>
          <h2 class="text-xl font-semibold text-gray-800 mb-4">🧾 Order Details</h2>
          <div class="space-y-2 text-gray-700">
            <div class="flex justify-between">
              <span>Order Number</span>
              <span class="font-semibold">{{ $order->id }}</span>
            </div>
            <div class="flex justify-between">
              <span>Date</span>
              <span class="font-semibold">{{ $order->created_at->format('d-m-Y') }}</span>
            </div>
            <div class="flex justify-between">
              <span>Total</span>
              <span class="font-semibold text-blue-600">{{ Number::currency($order->grand_total, 'LKR') }}</span>
            </div>
            <div class="flex justify-between">
              <span>Payment Method</span>
              <span class="font-semibold">{{ $order->payment_method == 'cod' ? 'Cash on Delivery' : 'Card' }}</span>
            </div>
          </div>
        </div>

        <!-- Shipping Info -->
        <div>
          <h2 class="text-xl font-semibold text-gray-800 mb-4">🚚 Shipping</h2>
          <div class="flex items-center gap-3">
            <div class="text-blue-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.6 8M17 13l1.6 8M6 21h12M9 3h6" />
              </svg>
            </div>
            <div class="text-gray-700">
              <p class="font-semibold">Delivery</p>
              <p class="text-sm">Delivery within 24 hours</p>
            </div>
            <div class="ml-auto font-semibold text-gray-600">
              {{ Number::currency(0, 'LKR') }}
            </div>
          </div>
        </div>
      </div>

      <!-- Order Financial Breakdown -->
      <div class="space-y-2 mb-10">
        <div class="flex justify-between text-gray-700">
          <span>Subtotal</span>
          <span>{{ Number::currency($order->grand_total, 'LKR') }}</span>
        </div>
        <div class="flex justify-between text-gray-700">
          <span>Discount</span>
          <span>{{ Number::currency(0, 'LKR') }}</span>
        </div>
        <div class="flex justify-between text-gray-700">
          <span>Shipping</span>
          <span>{{ Number::currency(0, 'LKR') }}</span>
        </div>
        <hr>
        <div class="flex justify-between font-bold text-blue-700 text-lg">
          <span>Grand Total</span>
          <span>{{ Number::currency($order->grand_total, 'LKR') }}</span>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
        <a href="/products"
          class="w-full sm:w-auto text-center px-6 py-3 border border-blue-500 text-blue-600 font-medium rounded-lg hover:bg-blue-600 hover:text-white transition">
          🔙 Continue Shopping
        </a>
        <a href="/my-orders"
          class="w-full sm:w-auto text-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
          📦 View My Orders
        </a>
      </div>
    </div>
  </section>
</div>
