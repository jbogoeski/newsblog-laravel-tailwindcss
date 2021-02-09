<x-app-layout>
  
  <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
      <div class="flex h-screen bg-gray-100 dark:bg-gray-800 font-roboto">
          <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
              class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
  
          <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
              class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
              <div class="flex items-center justify-center mt-8">
                  <div class="flex items-center">
                      <a href="{{ route('dashboard1') }}"><span class="text-gray-800 dark:text-white text-2xl font-semibold">Dashboard</span></a>
                  </div>
              </div>
              <!--navbar  -->
              @include('admin.includes.navbar')
              <!--navbar end -->
          </div>
  
          <div class="flex-1 flex flex-col overflow-hidden">

              <!-- header -->
              @include('admin.includes.header')
              <!-- header end -->
  
              <main class="flex-1 overflow-x-hidden overflow-y-auto">
                  <div class="container mx-auto px-6 py-8">
                      {{-- <div class="grid place-items-center h-96 text-gray-500 dark:text-gray-300 text-xl border-4 border-gray-300"> --}}
                          @yield('content')
                      {{-- </div> --}}
                  </div>
              </main>

          </div>
      </div>
  </div>
</div>

</x-app-layout>