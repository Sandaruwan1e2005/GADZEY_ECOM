<footer class="bg-gray-900 w-full text-white font-poppins">
  <div class="max-w-[85rem] mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <!-- Grid layout -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
      
      <!-- Branding -->
      <div class="col-span-full lg:col-span-1">
        <a class="text-2xl font-bold text-white tracking-widest" href="/">
          Gadzey
        </a>
      </div>

      <!-- Product Links -->
      <div>
        <h4 class="font-semibold text-white mb-3">Product</h4>
        <ul class="space-y-2">
          <li><a href="/categories" class="text-gray-400 hover:text-blue-400 transition">Categories</a></li>
          <li><a href="/products" class="text-gray-400 hover:text-blue-400 transition">All Products</a></li>
          <li><a href="/products?filter=featured" class="text-gray-400 hover:text-blue-400 transition">Featured</a></li>
        </ul>
      </div>

      <!-- Company Links -->
      <div>
        <h4 class="font-semibold text-white mb-3">Company</h4>
        <ul class="space-y-2">
          <li><a href="/about" class="text-gray-400 hover:text-blue-400 transition">About Us</a></li>
          <li><a href="/contact" class="text-gray-400 hover:text-blue-400 transition">Contact</a></li>
          <li><a href="/blog" class="text-gray-400 hover:text-blue-400 transition">Blog</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="col-span-2">
        <h4 class="font-semibold text-white mb-3">Stay Connected</h4>
        <form class="flex flex-col sm:flex-row items-center gap-3 mt-4 bg-white/10 p-3 rounded-lg">
          <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 text-sm rounded-md bg-white/20 text-white placeholder:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-sm font-semibold rounded-md transition">Subscribe</button>
        </form>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="flex flex-col md:flex-row justify-between items-center mt-10 border-t border-gray-700 pt-6">
      <p class="text-sm text-gray-400 mb-2 md:mb-0">© {{ date('Y') }} Gadzey. All rights reserved.</p>
      
      <!-- Social icons -->
      <div class="flex space-x-4">
        <a href="#" class="hover:text-blue-400 transition">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="hover:text-blue-400 transition">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="hover:text-blue-400 transition">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="hover:text-blue-400 transition">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </div>
</footer>
