<header class="">
    <nav class="flex flex-wrap items-center justify-between w-full px-4 py-4 text-lg text-gray-700 bg-gray-600 md:py-0"
    >
        <div class="flex flex-row items-center">
            <a href="/"> 
                <div class="flex flex-row items-center">
                   <img class="bg-gray-500" src="images/cauldron-avatar-favicon48.png" alt="">
                    <span class="ml-2 text-xl font-bold text-gray-300 hover:text-green-400">Cauldron</span> 
                </div>
                
            </a>
        </div>
        <div class="w-full md:flex md:items-center md:w-auto " id="menu">
            <ul
              class="pt-4 text-base text-gray-300 md:flex md:justify-between md:pt-0"
            >
              <li>
                <a class="{{request()->is('login')? 'active:text-red-600' : ''}} block py-2 md:p-4 hover:text-green-400" href="/login"
                  >Login</a
                >
              </li>
              <li>
                <a class="{{request()->is('register')? 'active:text-red-600' : ''}} block py-2 md:p-4 hover:text-green-400" href="/register"
                  >Register</a
                >
              </li>
              {{-- <li>
                <a class="block py-2 md:p-4 hover:text-green-400" href="#"
                  >Customers</a
                >
              </li>
              <li>
                <a class="block py-2 md:p-4 hover:text-green-400" href="#"
                  >Blog</a
                >
              </li>
              <li>
                <a
                  class="block py-2 text-green-500 md:p-4 hover:text-green-400"
                  href="#"
                  >Sign Up</a
                >
              </li> --}}
            </ul>
          </div>
    </nav>
</header>



{{-- <ul class="flex">
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="#">Login</a>
    </li>
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
    </li>
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
    </li>
    <li class="mr-6">
      <a class="text-gray-400 cursor-not-allowed" href="#">Disabled</a>
    </li>
  </ul>
  <hr class="mt-4"> --}}