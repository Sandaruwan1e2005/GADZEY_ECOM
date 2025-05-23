<div class="w-full max-w-[85rem] py-16 px-4 sm:px-6 lg:px-8 mx-auto">
  <h2 class="text-4xl font-extrabold text-center text-gray-800 dark:text-white mb-12">
    Shop by Category
  </h2>

  <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
    @foreach ($categories as $category)
      <a href="/products?selected_categories[0]={{ $category->id }}"
         wire:key="{{ $category->id }}"
         class="group block bg-white dark:bg-slate-800 hover:bg-gray-50 dark:hover:bg-slate-700 border border-gray-200 dark:border-slate-700 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-6">
        
        <div class="flex items-center gap-5">
          <img src="{{ url('storage', $category->image) }}"
               alt="{{ $category->name }}"
               class="w-16 h-16 rounded-lg object-cover shadow-md">

          <div class="flex-1">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white group-hover:text-blue-600 transition">
              {{ $category->name }}
            </h3>
            <p class="text-sm text-gray-500 dark:text-gray-300 mt-1">
              Browse all items in {{ $category->name }}.
            </p>
          </div>

          <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 transition-transform transform group-hover:translate-x-1"
               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke="currentColor" stroke-width="2">
            <path d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </a>
    @endforeach
  </div>
</div>
