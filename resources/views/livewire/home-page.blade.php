<div>
<div class="w-full h-screen bg-gradient-to-br from-blue-100 via-white to-cyan-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 px-6 py-12 flex items-center overflow-hidden relative">

  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center z-10">
    <!-- Left Content -->
    <div class="text-center md:text-left">
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-fuchsia-500 to-pink-500">
        Discover Gadzey – Shop Smarter, Live Better
      </h1>
      <p class="mt-6 text-lg text-gray-700 dark:text-gray-300">
        From electronics to lifestyle, find the best deals in Sri Lanka with fast delivery and trusted quality.
      </p>

      <!-- CTA Buttons -->
      <div class="mt-8 flex flex-col sm:flex-row sm:justify-start gap-4">
        <a href="/register"
          class="inline-block px-6 py-3 text-white text-lg font-semibold rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg hover:shadow-xl hover:from-pink-500 hover:to-purple-600 transition">
          🚀 Get Started
        </a>
        <a href="/contact"
          class="inline-block px-6 py-3 bg-white text-gray-800 hover:bg-gray-100 border border-gray-300 rounded-lg dark:bg-slate-800 dark:text-white dark:border-gray-600 dark:hover:bg-slate-700 shadow">
          💬 Contact Sales
        </a>
      </div>

      <!-- Star Reviews -->
      <div class="mt-10 flex flex-col sm:flex-row sm:items-center gap-4">
        <div class="flex items-center space-x-1">
          @for ($i = 0; $i < 5; $i++)
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.518 4.674a1 1 0 00.95.69h4.905c.969 0 1.371 1.24.588 1.81l-3.97 2.88a1 1 0 00-.364 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118l-3.97-2.88a1 1 0 00-1.176 0l-3.97 2.88c-.784.57-1.838-.197-1.539-1.118l1.518-4.674a1 1 0 00-.364-1.118l-3.97-2.88c-.783-.57-.38-1.81.588-1.81h4.905a1 1 0 00.95-.69l1.518-4.674z"/>
            </svg>
          @endfor
        </div>
        <p class="text-sm text-gray-700 dark:text-gray-300">
          <span class="font-semibold">4.8/5</span> from 12,000+ reviews
        </p>
      </div>
    </div>

    <!-- Right Content -->
    <div class="relative flex justify-center items-center">
      <img src="https://cdni.iconscout.com/illustration/premium/thumb/online-shopping-4268410-3551764.png"
           alt="Gadzey Shopping"
           class="w-full max-w-md mx-auto drop-shadow-2xl rounded-xl z-10">

      <!-- Floating Elements -->
      <img src="https://cdn-icons-png.flaticon.com/128/992/992700.png" alt="Shoe"
           class="absolute top-6 right-10 w-12 animate-bounce drop-shadow" />
      <img src="https://cdn-icons-png.flaticon.com/128/3081/3081559.png" alt="Smartwatch"
           class="absolute top-24 right-0 w-10 animate-spin-slow drop-shadow" />
      <img src="https://cdn-icons-png.flaticon.com/128/882/882706.png" alt="T-shirt"
           class="absolute bottom-20 right-10 w-12 animate-pulse drop-shadow" />
    </div>
  </div>

  <!-- Blurred Decorative Backgrounds -->
  <div class="absolute inset-0 z-0 pointer-events-none">
    <div class="absolute w-96 h-96 bg-blue-200 rounded-full -top-20 -left-24 blur-3xl opacity-30"></div>
    <div class="absolute w-60 h-60 bg-pink-300 rounded-full -bottom-16 -right-12 blur-2xl opacity-25"></div>
    <div class="absolute w-72 h-72 bg-purple-400 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[120px] opacity-10"></div>
  </div>
</div>



  {{-- Brand Section Start --}}
<section class="py-20 bg-gradient-to-b from-white via-blue-50 to-white dark:from-slate-900 dark:via-slate-800 dark:to-slate-900">
  <div class="max-w-4xl mx-auto text-center mb-14">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 dark:text-white">
      Explore Top <span class="bg-gradient-to-r from-blue-500 via-cyan-500 to-teal-400 bg-clip-text text-transparent">Brands</span>
    </h2>
    <div class="mt-4 mb-4 w-24 h-1 mx-auto bg-gradient-to-r from-blue-300 via-blue-600 to-blue-400 rounded-full animate-pulse"></div>
    <p class="text-lg text-gray-600 dark:text-gray-300">
      Trusted by thousands — handpicked for style, performance, and innovation. Only at Gadzey.
    </p>
  </div>

  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      @foreach ($brands as $brand)
        <div wire:key="{{ $brand->id }}"
             class="group bg-white/80 dark:bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">

          <a href="/products?selected_brands[0]={{ $brand->id }}" class="block overflow-hidden">
            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}"
                 class="w-full h-56 object-cover transform group-hover:scale-105 transition duration-500" loading="lazy">
          </a>

          <div class="p-5 text-center">
            <a href="/products?selected_brands[0]={{ $brand->id }}"
               class="text-2xl font-bold text-gray-800 dark:text-white transition group-hover:text-blue-600 dark:group-hover:text-cyan-400">
              {{ $brand->name }}
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
{{-- Brand Section End --}}

{{-- Category Section Start --}}
<div class="bg-gradient-to-b from-orange-100 via-white to-orange-50 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 py-20">
  <div class="max-w-4xl mx-auto text-center mb-14">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 dark:text-white">
      Browse <span class="bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent">Categories</span>
    </h2>
    <div class="w-24 mx-auto mt-3 mb-6 h-1 bg-gradient-to-r from-blue-300 via-blue-600 to-blue-400 rounded-full animate-pulse"></div>
    <p class="text-lg text-gray-600 dark:text-gray-300">
      Discover the top categories that help you shop smart and fast at Gadzey.
    </p>
  </div>

  <div class="max-w-7xl mx-auto px-6">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach ($categories as $category)
        <a href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}"
          class="group relative flex items-center bg-white/80 dark:bg-slate-800/80 backdrop-blur-md border border-gray-200 dark:border-gray-700 rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition duration-300 overflow-hidden p-5">

          <!-- Category Icon -->
          <img src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}"
               class="w-12 h-12 rounded-full object-cover border-2 border-blue-200 group-hover:scale-110 transition-transform duration-300">

          <!-- Name -->
          <div class="ms-4 flex-1">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
              {{ $category->name }}
            </h3>
          </div>

          <!-- Icon -->
          <div class="transition-transform transform group-hover:translate-x-1 text-blue-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M9 18l6-6-6-6" />
            </svg>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>
{{-- Category Section End --}}


{{-- Customer Reviews Section Start --}}
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-orange-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 dark:text-white">
        Happy <span class="text-blue-600">Customers
      </h2>
      <p class="text-lg mt-3 text-gray-600 dark:text-gray-300">Real voices from Colombo to Jaffna sharing their Gadzey experience.</p>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach([
        ['name' => 'Tharindu S.', 'city' => 'Colombo', 'rating' => 5, 'review' => 'Gadzey is my go-to for all electronics! Lightning-fast delivery and quality products.', 'image' => 'https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg'],
        ['name' => 'Nisansala K.', 'city' => 'Kandy', 'rating' => 4, 'review' => 'I ordered from Kandy and got my package within a day. Highly recommend Gadzey!', 'image' => 'https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg'],
        ['name' => 'Mohamed R.', 'city' => 'Galle', 'rating' => 5, 'review' => 'Excellent customer support and amazing offers during Avurudu season!', 'image' => 'https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg'],
        ['name' => 'Dilani P.', 'city' => 'Jaffna', 'rating' => 4, 'review' => 'Smooth checkout, secure payments, and the TV I bought was perfect. Love from Jaffna!', 'image' => 'https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg']
      ] as $user)
      <div class="bg-white/80 dark:bg-slate-800 backdrop-blur-md shadow-lg rounded-xl p-6 transition hover:scale-105 duration-300">
        <div class="flex items-center mb-4">
          <img class="w-14 h-14 rounded-full border-2 border-blue-300" src="{{ $user['image'] }}" alt="{{ $user['name'] }}">
          <div class="ml-4">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $user['name'] }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $user['city'] }}, Sri Lanka</p>
          </div>
        </div>
        <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $user['review'] }}</p>
        <div class="flex items-center">
          @for ($i = 1; $i <= 5; $i++)
            <svg class="w-5 h-5 {{ $i <= $user['rating'] ? 'text-yellow-400' : 'text-gray-300 dark:text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967 4.175.012c.969.003 1.371 1.24.588 1.81l-3.37 2.448 1.289 3.97c.3.921-.755 1.688-1.54 1.118L10 13.347l-3.379 2.905c-.784.57-1.838-.197-1.538-1.118l1.29-3.97-3.37-2.448c-.782-.57-.38-1.807.588-1.81l4.175-.012 1.285-3.967z"/>
            </svg>
          @endfor
          <span class="ml-2 text-sm font-medium text-gray-600 dark:text-gray-400">{{ $user['rating'] }}/5</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
{{-- Customer Reviews Section End --}}



</div>
