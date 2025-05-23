<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <section class="py-12 bg-gradient-to-tr from-white via-blue-50 to-sky-100 dark:bg-gray-800 rounded-xl shadow-md">
    <div class="mx-auto max-w-7xl lg:py-6 md:px-6">
      <div class="flex flex-wrap -mx-3">
        <!-- Sidebar Filters -->
        <aside class="w-full px-3 lg:w-1/4">
          <div class="sticky top-20 space-y-6">
            <!-- Category Filter -->
            <div class="bg-white p-5 rounded-lg shadow dark:bg-gray-900">
              <h2 class="text-xl font-semibold mb-3 text-blue-700 dark:text-white">Categories</h2>
              @foreach ($categories as $category)
                <label class="flex items-center space-x-2 mb-2 text-gray-700 dark:text-gray-300" wire:key="{{ $category->id }}">
                  <input type="checkbox" wire:model.live="selected_categories" value="{{ $category->id }}" class="accent-blue-600 w-4 h-4 rounded">
                  <span>{{ $category->name }}</span>
                </label>
              @endforeach
            </div>

            <!-- Brand Filter -->
            <div class="bg-white p-5 rounded-lg shadow dark:bg-gray-900">
              <h2 class="text-xl font-semibold mb-3 text-blue-700 dark:text-white">Brands</h2>
              @foreach ($brands as $brand)
                <label class="flex items-center space-x-2 mb-2 text-gray-700 dark:text-gray-300" wire:key="{{ $brand->id }}">
                  <input type="checkbox" wire:model.live="selected_brands" value="{{ $brand->id }}" class="accent-blue-600 w-4 h-4 rounded">
                  <span>{{ $brand->name }}</span>
                </label>
              @endforeach
            </div>

            <!-- Product Status -->
            <div class="bg-white p-5 rounded-lg shadow dark:bg-gray-900">
              <h2 class="text-xl font-semibold mb-3 text-blue-700 dark:text-white">Product Status</h2>
              <label class="flex items-center space-x-2 mb-2 text-gray-700 dark:text-gray-300">
                <input type="checkbox" wire:model.live="featured" value="1" class="accent-blue-600 w-4 h-4 rounded">
                <span>Featured</span>
              </label>
              <label class="flex items-center space-x-2 mb-2 text-gray-700 dark:text-gray-300">
                <input type="checkbox" wire:model.live="on_sale" value="1" class="accent-blue-600 w-4 h-4 rounded">
                <span>On Sale</span>
              </label>
            </div>

            <!-- Price Range -->
            <div class="bg-white p-5 rounded-lg shadow dark:bg-gray-900">
              <h2 class="text-xl font-semibold mb-3 text-blue-700 dark:text-white">Price Range</h2>
              <p class="mb-3 text-blue-500 font-medium">LKR {{ number_format($price_range) }}</p>
              <input type="range" wire:model.live="price_range" min="1000" max="500000" step="1000" class="w-full accent-blue-600">
              <div class="flex justify-between mt-2 text-sm text-gray-600">
                <span>LKR 1,000</span>
                <span>LKR 500,000</span>
              </div>
            </div>
          </div>
        </aside>

        <!-- Products Section -->
        <main class="w-full px-3 lg:w-3/4 mt-8 lg:mt-0">
          <div class="flex justify-end mb-4">
            <select wire:model.live="sort" class="text-sm border px-3 py-2 rounded-md bg-white dark:bg-gray-700 dark:text-white">
              <option value="latest">Sort by Latest</option>
              <option value="price">Sort by Price</option>
            </select>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($products as $product)
              <div class="bg-white dark:bg-gray-900 rounded-lg shadow hover:shadow-lg transition duration-300">
                <a href="/products/{{ $product->slug }}">
                  <img src="{{ url('storage', $product->images[0]) }}" alt="{{ $product->name }}" class="rounded-t-lg w-full h-56 object-cover">
                </a>
                <div class="p-4">
                  <h3 class="text-lg font-semibold dark:text-white">{{ $product->name }}</h3>
                  <p class="text-green-600 dark:text-green-400 font-bold mt-1">LKR {{ number_format($product->price) }}</p>
                </div>
                <div class="px-4 pb-4">
                  <button wire:click.prevent="addToCart({{ $product->id }})"
                          class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 7h11L17 13M9 21h6"/>
                    </svg>
                    <span wire:loading.remove wire:target="addToCart({{ $product->id }})">Add to Cart</span>
                    <span wire:loading wire:target="addToCart({{ $product->id }})">Adding...</span>
                  </button>
                </div>
              </div>
            @endforeach
          </div>

          <!-- Pagination -->
          <div class="mt-8">
            {{ $products->links() }}
          </div>
        </main>
      </div>
    </div>
  </section>
</div>
