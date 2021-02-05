
<x-app-layout>
  @if (session('status'))
<div class="absolute right-1 w-full lg:left-96 flex items-center justify-center bg-gray-100">
  <div class="w-full mx-auto">
    <!-- Alert Success -->
    <div
        class="bg-green-200 px-0 py-0 my-1 rounded-md text-lg flex items-center mx-20 w-3/4 xl:w-2/4"
        >
      <svg
          viewBox="0 0 24 24"
          class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
          >
        <path
              fill="currentColor"
              d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
              ></path>
      </svg>
      <div class="pl-1">

        <span class="text-green-800"> {{ session()->get('status') }}</span>
      </div>
    </div>
    <!-- End Alert Success -->
  </div>
</div>
@endif
<!--

=========================================================
* Notus JS - v1.0.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/master/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{ asset('img/apple-icon.png') }}"
    />
   
    <title>Settings | Notus JS by Creative Tim</title>
  </head>
 
  <body class="text-gray-800 antialiased">


    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root" class="pt-8">
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i>
          </button>
          <a
            class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
            href="/dashboard"
          >
            Notus JS
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
              <a
                class="text-gray-600 block py-1 px-3"
                href="#pablo"
                onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="notification-dropdown"
              >
                <a
                  href="{{ route('profileuser') }}"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >User Profile</a
                ><a
                  href="{{ route('user.password.view')}}"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Change Password</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Something else here</a
                >
                <div class="h-0 my-2 border border-solid border-gray-200"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Seprated link</a
                >
              </div>
            </li>
            <li class="inline-block relative">
              <a
                class="text-gray-600 block"
                href="#pablo"
                onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{ asset('img/team-1-800x800.jpg') }}"
                  /></span></div
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-responsive-dropdown"
              >
                <a
                  href="{{ route('profileuser') }}"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >User Profile</a
                ><a
                  href="{{ route('user.password.view')}}"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Change Password</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Something else here</a
                >
                <div class="h-0 my-2 border border-solid border-gray-200"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Seprated link</a
                >
              </div>
            </li>
          </ul>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                    href="../../index.html"
                  >
                    Notus JS
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
              <div class="mb-3 pt-0">
                <input
                  type="text"
                  placeholder="Search"
                  class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                />
              </div>
            </form>
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              Admin Layout Pages
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  href="./dashboard.html"
                  class="text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600"
                >
                  <i class="fas fa-tv mr-2 text-sm text-gray-400"></i>
                  Dashboard
                </a>
              </li>

          
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
          
        </div>
      </nav>
      
      <div class="relative md:ml-64 bg-gray-100">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4"
        >
        
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4"
          >
          
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="./index.html"
              >Dashboard</a
            >
            <form
              class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
            >
              <div class="relative flex w-full flex-wrap items-stretch">
                <span
                  class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400  bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
                  ><i class="fas fa-search"></i
                ></span>
                <input
                  type="text"
                  placeholder="Search here..."
                  class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"
                />
              </div>
            </form>
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a
                class="text-gray-600 block"
                href="#pablo"
                onclick="openDropdown(event,'user-dropdown')"
              >
                <div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{ asset('img/team-1-800x800.jpg') }}"
                  /></span>
                </div>
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-dropdown"
              >
                <a
                  href="{{ route('profileuser') }}"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >View Profile</a
                ><a
                  href="{{ route('user.password.view')}}"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Change Password</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Something else here</a
                >
                <div class="h-0 my-2 border border-solid border-gray-200"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                  >Seprated link</a
                >
              </div>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
         
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0"
              >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                  <div class="text-center flex justify-between">
                    <h6 class="text-gray-800 text-xl font-bold">My Password</h6>
                    <button
                      class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                      type="button"
                    >
                      Settings
                    </button>
                  </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
               
                  <form action="{{ route('user.password.update') }}" method="POST">
                    @csrf
                    <h6
                      class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                      User Information
                    </h6>
                    <div class="flex flex-col">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                 
                      @endif
                      @if (session('error'))

                      <span class="text-green-800"> {{ session()->get('error') }}</span>

                      @endif
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Current Password
                          </label>
                          <input
                            id="current_password"
                            name="oldpassword"
                            type="password"
                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          />
                        </div>
                      </div>
                 
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            New Password
                          </label>
                          <input
                            id="password"
                            name="password"
                            type="password"
                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          />
                        </div>
                      </div>
                
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Confirm Password
                          </label>
                          <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          />
                        </div>
                      </div>
                      @if ($errors->has('password_confirmation'))
                      <p>{{ $errors->first('password_confirmation') }}</p>
                      @endif

                      <hr class="w-full bg-gray-400 border-t-2 my-3">

                      <button
                      class="bg-pink-500 w-1/2 text-white active:bg-pink-600 font-bold uppercase text-md px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                      type="submit"
                    >
                      Update
                    </button>
                     
                    </div>

               
                  </form>
                </div>
              </div>
            </div>
      

            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
              >
                <div class="px-6">
                  <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4 flex justify-center">
                      <div class="relative">
                        <img
                          src="{{ (!empty($user->profile_photo_path)) ? asset('upload/user_images/'.$user->profile_photo_path) : asset('upload/noimage.png') }}"
                          class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-18 max-w-xs w-28"
                        />
                      </div>
                    </div>
                    <div class="w-full px-4 text-center mt-20">
                      <div class="flex justify-center py-4 lg:pt-4 pt-8">
                        <div class="mr-4 p-3 text-center">
                          <span
                            class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            22
                          </span>
                          <span class="text-sm text-gray-500">Friends</span>
                        </div>
                        <div class="mr-4 p-3 text-center">
                          <span
                            class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            10
                          </span>
                          <span class="text-sm text-gray-500">Photos</span>
                        </div>
                        <div class="lg:mr-4 p-3 text-center">
                          <span
                            class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            89
                          </span>
                          <span class="text-sm text-gray-500">Comments</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-12">
                    <h3
                      class="text-xl font-semibold leading-normal mb-2 text-gray-800 "
                    >
                      {{ $user->name }}
                    </h3>
                    <div
                      class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                    >
                      <i
                        class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                      ></i>
                      Los Angeles, California
                    </div>
                    <div class="mb-2 text-gray-700 mt-10">
                      <i
                        class="fas fa-briefcase mr-2 text-lg text-gray-500"
                      ></i>
                      Solution Manager - Creative Tim Officer
                    </div>
                    <div class="mb-2 text-gray-700">
                      <i
                        class="fas fa-university mr-2 text-lg text-gray-500"
                      ></i>
                      University of Computer Science
                    </div>
                  </div>
                  <div class="mt-10 py-10 border-t border-gray-300 text-center">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full lg:w-9/12 px-4">
                        <p class="mb-4 text-lg leading-relaxed text-gray-800">
                          An artist of considerable range, Jenna the name taken
                          by Melbourne-raised, Brooklyn-based Nick Murphy
                          writes, performs and records all of his own music,
                          giving it a warm, intimate feel with a solid groove
                          structure. An artist of considerable range.
                        </p>
                        <a
                          href="javascript:void(0);"
                          class="font-normal text-pink-500"
                        >
                          Show more
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="block py-4">
            <div class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 border-gray-300" />
              <div
                class="flex flex-wrap items-center md:justify-between justify-center"
              >
                <div class="w-full md:w-4/12 px-4">
                  <div
                    class="text-sm text-gray-600 font-semibold py-1 text-center md:text-left"
                  >
                    Copyright © <span id="get-current-year"></span>
                    <a
                      href="https://www.creative-tim.com?ref=njs-settings"
                      class="text-gray-600 hover:text-gray-800 text-sm font-semibold py-1"
                    >
                      Creative Tim
                    </a>
                  </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                  <ul
                    class="flex flex-wrap list-none md:justify-end justify-center"
                  >
                    <li>
                      <a
                        href="https://www.creative-tim.com?ref=njs-settings"
                        class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                      >
                        Creative Tim
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://www.creative-tim.com/presentation?ref=njs-settings"
                        class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                      >
                        About Us
                      </a>
                    </li>
                    <li>
                      <a
                        href="http://blog.creative-tim.com?ref=njs-settings"
                        class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                      >
                        Blog
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://github.com/creativetimofficial/notus-js/blob/master/LICENSE.md?ref=njs-settings"
                        class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                      >
                        MIT License
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
    
      /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById(
            "get-current-year"
          ).innerHTML = new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }
    </script>
  </body>
</html>

</x-app-layout>


