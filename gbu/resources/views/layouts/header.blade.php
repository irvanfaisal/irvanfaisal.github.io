<nav class="bg-gray-100 px-5 w-full fixed bg-white border-b border-gray-600/10 drop-shadow-sm z-30">

  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">

      <div class="flex space-x-4">

        <!-- logo -->
        <div>
          <a href="{{ url('') }}" class="flex items-center p-2 text-gray-800 hover:text-gray-900">
            <img src="{{URL::asset('img/logo.png')}}" class="h-14" alt="..." />
            <p class="hidden md:block uppercase text-2xl font-bold ml-4">Global Bumi Utama</p>
          </a>
        </div>
        <!-- /logo -->

        <!-- /promari nav -->

      </div>

      <!-- secondary nav -->
      <div class="hidden md:flex items-center space-x-1">
            <a href="{{ url('product') }}" class="text-sm block md:inline-block bg-white hover:text-blue-800 px-3 py-3 border-b-2 border-gray-500 md:border-none my-1">Products</a>
            <a href="{{ url('') }}#customer" class="text-sm block md:inline-block bg-white hover:text-blue-800 px-3 py-3 border-b-2 border-gray-500 md:border-none my-1">Customers</a>
            <a href="{{ url('contact') }}#enquiry" class="text-sm block md:inline-block bg-white hover:text-blue-800 px-3 py-3 border-b-2 border-gray-500 md:border-none my-1">Enquiry</a>
            <a href="{{ url('contact') }}" class="text-sm block md:inline-block bg-white hover:text-blue-800 px-3 py-3 border-b-2 border-gray-500 md:border-none my-1">Contact</a>
            <a href="{{ url('about') }}" class="text-sm block md:inline-block bg-white hover:text-blue-800 px-3 py-3 border-b-2 border-gray-500 md:border-none my-1">About Us</a>
      </div>

      <!-- mobile buttons -->
      <div class="md:hidden flex items-center">
        <button class="mobile-menu-button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <!-- /mobile buttons -->

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu hidden">
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Products</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Customers</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Enquiry</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Contact</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">About Us</a>
  </div>
  <!-- /mobile menu -->

</nav>