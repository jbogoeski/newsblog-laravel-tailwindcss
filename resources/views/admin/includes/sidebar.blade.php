 <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none lg:w-2/12  md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
   
      <!-- end link -->

      <!-- link -->
      <div class="dropdown">

        <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
          <i class="fad fa-computer-classic text-xs mr-2"></i>
          Categories
        </a>
        <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
        <div class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-0 py-2 animated faster">
          <!-- top -->
          <a href="{{ route('admin.category.index') }}" class="pr-6 border-t items-center pt-2 flex justify-center capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-computer-classic text-xs mr-2"></i>
            Category
          </a>

          <a href="#" class="items-center pt-2 flex justify-center capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-computer-classic text-xs mr-2"></i>
            SubCategory
          </a>
        </div>

      </div>

       <a href="#" class="mt-2 mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cheese-swiss text-xs mr-2"></i>
        Widgets
      </a>

      
      <!-- end link -->

    </div>
    <!-- end sidebar content -->

  </div>