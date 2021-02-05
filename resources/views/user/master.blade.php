<x-app-layout>
          <body class="text-gray-800 antialiased">
            <div id="root">
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
                        class="text-gray-600 block"
                        href="#"
                        onclick="openDropdown(event,'user-responsive-dropdown')"
                        ><div class="items-center flex">
                          <span
                            class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                            ><img
                              alt="..."
                              class="w-full rounded-full align-middle border-none shadow-lg"
                              src="{{ asset('img/team-1-800x800.jpg')}}"
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
                        >
                        <div class="h-0 my-2 border border-solid border-gray-200"></div>
                        <a
                          href="{{ route('user.logout') }}"
                          class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                          >Logout</a
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
                            href="/"
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
                          class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600"
                        >
                          <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                          Dashboard
                        </a>
                      </li>
        
                    </ul>
        
                    <!-- Divider -->
                    <hr class="my-4 md:min-w-full" />
                    <!-- Heading -->
                    <h6
                      class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
                    >
                      Auth Layout Pages
                    </h6>
                    <!-- Navigation -->
        
                    <ul
                      class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
                    >
                      <li class="items-center">
                        <a
                          href="../auth/login.html"
                          class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                        >
                          <i class="fas fa-fingerprint text-gray-400 mr-2 text-sm"></i>
                          Login
                        </a>
                      </li>
        
                    </ul>
        
                    </ul>
                  </div>
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
                          class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
                          ><i class="fas fa-search"></i
                        ></span>
                        <input
                          type="text"
                          placeholder="Search here..."
                          class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"
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
                              src="{{ asset('img/team-1-800x800.jpg')}}"
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
                          >User Profile</a
                        ><a
                          href="{{ route('user.password.view')}}"
                          class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                          >Change Password</a
                        >
                        <div class="h-0 my-2 border border-solid border-gray-200"></div>
                        <a
                          href="{{ route('user.logout') }}"
                          class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                          >Logout</a
                        >
                      </div>
                    </ul>
                  </div>
                </nav>
                <!-- Header -->
                @yield('content')

                @include('user.partial.footer')
            </div>
            <script
              src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
              charset="utf-8"
            ></script>
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
        
              (function () {
                /* Chart initialisations */
                /* Line Chart */
                var config = {
                  type: "line",
                  data: {
                    labels: [
                      "January",
                      "February",
                      "March",
                      "April",
                      "May",
                      "June",
                      "July",
                    ],
                    datasets: [
                      {
                        label: new Date().getFullYear(),
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [65, 78, 66, 44, 56, 67, 75],
                        fill: false,
                      },
                      {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#fff",
                        borderColor: "#fff",
                        data: [40, 68, 86, 74, 56, 60, 87],
                      },
                    ],
                  },
                  options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                      display: false,
                      text: "Sales Charts",
                      fontColor: "white",
                    },
                    legend: {
                      labels: {
                        fontColor: "white",
                      },
                      align: "end",
                      position: "bottom",
                    },
                    tooltips: {
                      mode: "index",
                      intersect: false,
                    },
                    hover: {
                      mode: "nearest",
                      intersect: true,
                    },
                    scales: {
                      xAxes: [
                        {
                          ticks: {
                            fontColor: "rgba(255,255,255,.7)",
                          },
                          display: true,
                          scaleLabel: {
                            display: false,
                            labelString: "Month",
                            fontColor: "white",
                          },
                          gridLines: {
                            display: false,
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.3)",
                            zeroLineColor: "rgba(0, 0, 0, 0)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2],
                          },
                        },
                      ],
                      yAxes: [
                        {
                          ticks: {
                            fontColor: "rgba(255,255,255,.7)",
                          },
                          display: true,
                          scaleLabel: {
                            display: false,
                            labelString: "Value",
                            fontColor: "white",
                          },
                          gridLines: {
                            borderDash: [3],
                            borderDashOffset: [3],
                            drawBorder: false,
                            color: "rgba(255, 255, 255, 0.15)",
                            zeroLineColor: "rgba(33, 37, 41, 0)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2],
                          },
                        },
                      ],
                    },
                  },
                };
                var ctx = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(ctx, config);
        
                /* Bar Chart */
                config = {
                  type: "bar",
                  data: {
                    labels: [
                      "January",
                      "February",
                      "March",
                      "April",
                      "May",
                      "June",
                      "July",
                    ],
                    datasets: [
                      {
                        label: new Date().getFullYear(),
                        backgroundColor: "#ed64a6",
                        borderColor: "#ed64a6",
                        data: [30, 78, 56, 34, 100, 45, 13],
                        fill: false,
                        barThickness: 8,
                      },
                      {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [27, 68, 86, 74, 10, 4, 87],
                        barThickness: 8,
                      },
                    ],
                  },
                  options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                      display: false,
                      text: "Orders Chart",
                    },
                    tooltips: {
                      mode: "index",
                      intersect: false,
                    },
                    hover: {
                      mode: "nearest",
                      intersect: true,
                    },
                    legend: {
                      labels: {
                        fontColor: "rgba(0,0,0,.4)",
                      },
                      align: "end",
                      position: "bottom",
                    },
                    scales: {
                      xAxes: [
                        {
                          display: false,
                          scaleLabel: {
                            display: true,
                            labelString: "Month",
                          },
                          gridLines: {
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.3)",
                            zeroLineColor: "rgba(33, 37, 41, 0.3)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2],
                          },
                        },
                      ],
                      yAxes: [
                        {
                          display: true,
                          scaleLabel: {
                            display: false,
                            labelString: "Value",
                          },
                          gridLines: {
                            borderDash: [2],
                            drawBorder: false,
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.2)",
                            zeroLineColor: "rgba(33, 37, 41, 0.15)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2],
                          },
                        },
                      ],
                    },
                  },
                };
                ctx = document.getElementById("bar-chart").getContext("2d");
                window.myBar = new Chart(ctx, config);
              })();
            </script>
          </body>
    
      <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
     
 
    </x-app-layout>
    