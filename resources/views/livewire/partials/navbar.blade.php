<header class="z-50 sticky top-0 w-full backdrop-blur-md bg-white/80 dark:bg-gray-900/80 border-b border-gray-200 dark:border-gray-700 shadow-xl rounded-b-2xl">
  <nav class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <div class="flex flex-wrap items-center justify-between">

      <!-- Brand -->
      <a href="/" class="text-2xl font-extrabold tracking-wide text-blue-600 dark:text-blue-400 hover:scale-105 transition-transform">
        GADZEY
      </a>

      <!-- Mobile Hamburger -->
      <div class="md:hidden">
        <button class="text-gray-600 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition" data-hs-collapse="#navbar-menu">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <!-- Links -->
      <div id="navbar-menu" class="hs-collapse hidden md:flex md:items-center md:gap-x-6 mt-4 md:mt-0">
        <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition">Home</a>
        <a href="/categories" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition">Categories</a>
        <a href="/products" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition">Products</a>

        <a href="/cart" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13m-11-6v6m6-6v6"/>
          </svg>
          Cart
          <span class="ml-2 inline-block px-2 py-0.5 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full border border-blue-200">
            {{ $total_count }}
          </span>
        </a>

        @guest
          <a href="/login" class="ml-4 px-4 py-2 rounded-full text-sm font-semibold text-white bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 transition shadow-md">
            Log in
          </a>
        @endguest

        @auth
          <div class="relative group ml-4">
            <button class="flex items-center text-gray-700 dark:text-gray-300 hover:text-blue-500 transition">
              {{ auth()->user()->name }}
              <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>

            <!-- Dropdown -->
            <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-50">
              <a href="/my-orders" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-t-md">My Orders</a>
              <a href="/account" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">My Account</a>
              <a href="/logout" class="block px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-800 rounded-b-md">Logout</a>
            </div>
          </div>
        @endauth
      </div>
    </div>
  </nav>
</header>
