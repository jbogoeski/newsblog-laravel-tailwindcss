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
  
                @php
                    $countpost = DB::table('posts')->select('id')->get();
                    $countcategory = DB::table('categories')->select('id')->get();
                    $countsubcategory = DB::table('sub_categories')->select('id')->get();
                    $countuser = DB::table('users')->select('id')->get();
  
  
                @endphp
    
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="container mx-auto px-6 py-8">
                        {{-- <div class="grid place-items-center h-96 text-gray-500 dark:text-gray-300 text-xl border-4 border-gray-300"> --}}
                            @yield('content')
  
                            <div class="w-1/5 inline-flex">
                              <div class="flex-auto p-4 bg-white rounded-xl shadow-">
                                  <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                                        Posts
                                      </h5>
                                      <span class="font-semibold text-xl text-gray-800">
                                        {{ $countpost->count()}}
                                      </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                        <i class="far fa-chart-bar"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <p class="text-sm text-gray-500 mt-4">
                                    <span class="text-green-500 mr-2">
                                      <i class="fas fa-arrow-up"></i> 3.42%
                                    </span>
                                    <span class="whitespace-no-wrap">
                                      Since last month
                                    </span>
                                  </p>
                                </div>
                            </div>
  
                            
                            <div class="w-1/5 inline-flex">
                              <div class="flex-auto p-4 bg-white rounded-xl shadow-">
                                  <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                                        Categories
                                      </h5>
                                      <span class="font-semibold text-xl text-gray-800">
                                        {{ $countcategory->count() }}
                                      </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                        <i class="far fa-chart-bar"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <p class="text-sm text-gray-500 mt-4">
                                    <span class="text-green-500 mr-2">
                                      <i class="fas fa-arrow-up"></i> 2.52%
                                    </span>
                                    <span class="whitespace-no-wrap">
                                      Since last month
                                    </span>
                                  </p>
                                </div>
                            </div>
  
  
                            <div class="w-1/5 inline-flex">
                              <div class="flex-auto p-4 bg-white rounded-xl shadow-">
                                  <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                                        Sub Category
                                      </h5>
                                      <span class="font-semibold text-xl text-gray-800">
                                        {{ $countsubcategory->count()}}
                                      </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                                        <i class="far fa-chart-bar"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <p class="text-sm text-gray-500 mt-4">
                                    <span class="text-green-500 mr-2">
                                      <i class="fas fa-arrow-up"></i> 10.48%
                                    </span>
                                    <span class="whitespace-no-wrap">
                                      Since last month
                                    </span>
                                  </p>
                                </div>
                            </div>
  
  
  
                            <div class="w-1/5 inline-flex">
                              <div class="flex-auto p-4 bg-white rounded-xl shadow-">
                                  <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                                        Users
                                      </h5>
                                      <span class="font-semibold text-xl text-gray-800">
                                        {{ $countuser->count()}}
                                      </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-indigo-500">
                                        <i class="far fa-chart-bar"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <p class="text-sm text-gray-500 mt-4">
                                    <span class="text-green-500 mr-2">
                                      <i class="fas fa-arrow-up"></i> 1.28%
                                    </span>
                                    <span class="whitespace-no-wrap">
                                      Since last month
                                    </span>
                                  </p>
                                </div>
                            </div>
  
                            {{-- </div> --}}
                    </div>
                    
                    <div>
                        <div>
                            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                  <div class="rounded-t mb-0 px-4 py-3 border-0">
                                    <div class="flex flex-wrap items-center">
                                      <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-base text-gray-800">
                                          Latest Post
                                        </h3>
                                      </div>
                                      <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                          <a href="{{ route('admin.post.index') }}">
                                            <button  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                                See all
                                            </button>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="block w-full overflow-x-auto">
                                    <!-- Projects table -->
                                    <table class="items-center w-full bg-transparent border-collapse">
                                      <thead>
                                        <tr>
                                          <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                            Post title
                                          </th>
                                          <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                            Author Name
                                          </th>
                                          <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                            Post Category
                                          </th>
                                          <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                            Date
                                          </th>
                                        </tr>
                                      </thead>
                                      @php
                                                $posts = DB::table('posts')->orderBy('id', 'DESC')->limit(5)->get();
                                        @endphp
                                      <tbody>
                                        @foreach ($posts as $post)
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                                {{ Str::limit($post->title_en, 60)}}    
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                @php
                                                    $user = DB::table('users')->where('id', $post->user_id)->select('name')->first();
                                                @endphp
                                                {{$user->name}}
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                @php
                                                $category = DB::table('categories')->where('id', $post->category_id)->select('category_en')->first();
                                                @endphp
                                               {{$category->category_en}}
                                            </td>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                <i class="fas fa-arrow-up text-orange-500 mr-4"></i>
                                                {{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                                                </td>
                                        </tr>
                                        @endforeach
                                        
                                      </tbody>
                                    </table>
                        
                                    
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div>
                          
                        </div>
                    </div>
                </main>
  
            </div>
        </div>
    </div>
  </div>
  
  </x-app-layout>