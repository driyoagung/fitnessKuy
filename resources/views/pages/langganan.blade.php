@extends('partial.main')
@section('container')
    
  <body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500"
  >
  
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    @extends('partial.aside')
    <main
      class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl"
    >
      <!-- Navbar -->
      <nav
        class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-main
        navbar-scroll="false"
      >
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="text-sm leading-normal">
                <a class="text-white opacity-50" href="javascript:;">Pages</a>
              </li>
              <li
                class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page"
              >
                Billing
              </li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">Billing</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div
                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease"
              >
                <span
                  class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all"
                >
                  <i class="fas fa-search"></i>
                </span>
                <input
                  type="text"
                  class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
                  placeholder="Type here..."
                />
              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            
              <li class="flex items-center">
                <a
                  href="../pages/sign-in.html"
                  class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand"
                >
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">Sign In</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a
                  href="javascript:;"
                  class="block p-0 text-sm text-white transition-all ease-nav-brand"
                  sidenav-trigger
                >
                  <div class="w-4.5 overflow-hidden">
                    <i
                      class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
                    ></i>
                    <i
                      class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
                    ></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>

              <!-- notifications -->

              <li class="relative flex items-center pr-2">
                <p class="hidden transform-dropdown-show"></p>
                <a
                  href="javascript:;"
                  class="block p-0 text-sm text-white transition-all ease-nav-brand"
                  dropdown-trigger
                  aria-expanded="false"
                >
                  <i class="cursor-pointer fa fa-bell"></i>
                </a>

                <ul
                  dropdown-menu
                  class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer"
                >
                  <!-- add show class on dropdown open js -->
                  <li class="relative mb-2">
                    <a
                      class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                      href="javascript:;"
                    >
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img
                            src="../assets/img/team-2.jpg"
                            class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl"
                          />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                            <span class="font-semibold">New message</span> from Laur
                          </h6>
                          <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                            <i class="mr-1 fa fa-clock"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative mb-2">
                    <a
                      class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                      href="javascript:;"
                    >
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img
                            src="../assets/img/small-logos/logo-spotify.svg"
                            class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl"
                          />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                            <span class="font-semibold">New album</span> by Travis Scott
                          </h6>
                          <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                            <i class="mr-1 fa fa-clock"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative">
                    <a
                      class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                      href="javascript:;"
                    >
                      <div class="flex py-1">
                        <div
                          class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl"
                        >
                          <svg
                            width="12px"
                            height="12px"
                            viewBox="0 0 43 36"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g
                                transform="translate(-2169.000000, -745.000000)"
                                fill="#FFFFFF"
                                fill-rule="nonzero"
                              >
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path
                                      class="color-background"
                                      d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                      opacity="0.593633743"
                                    ></path>
                                    <path
                                      class="color-background"
                                      d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                                    ></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                            Payment successfully completed
                          </h6>
                          <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                            <i class="mr-1 fa fa-clock"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="w-full px-6 py-6 mx-auto">
        <div class="w-full p-6 mx-auto">
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
              >
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                  <div class="flex items-center">
                    <p class="mb-0 dark:text-white/80">Edit Profile</p>
                    <button
                      type="button"
                      class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                    >
                      Settings
                    </button>
                  </div>
                </div>
                <div class="flex-auto p-6">
                  <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">
                    User Information
                  </p>
                  <form action="">
                  <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="username"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >Username</label
                        >
                        <input
                          type="text"
                          name="username"
                          value="lucky.jesse"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                      
                    </div>
                    
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="email"
                          class="inline-block mb-2 ml- font-bold text-xs text-slate-700 dark:text-white/80"
                          >Email address</label
                        >
                        <input
                          type="email"
                          name="email"
                          value="jesse@example.com"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                      
                    </div>
                    
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="first name"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >First name</label
                        >
                        <input
                          type="text"
                          name="first name"
                          value="Jesse"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="last name"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >Last name</label
                        >
                        <input
                          type="text"
                          name="last name"
                          value="Lucky"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                    </div>
                  </div>
                  <hr
                    class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
                  />
  
                  <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">
                    Contact Information
                  </p>
                  <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                      <div class="mb-4">
                        <label
                          for="address"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >Address</label
                        >
                        <input
                          type="text"
                          name="address"
                          value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="city"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >City</label
                        >
                        <input
                          type="text"
                          name="city"
                          value="New York"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="country"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >Country</label
                        >
                        <input
                          type="text"
                          name="country"
                          value="United States"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                    </div>
                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                      <div class="mb-4">
                        <label
                          for="postal code"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >Postal code</label
                        >
                        <input
                          type="text"
                          name="postal code"
                          value="437300"
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                    </div>
                  </div>
                  <hr
                    class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
                  />
  
                  <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">
                    About me
                  </p>
                  <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                      <div class="mb-4">
                        <label
                          for="about me"
                          class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                          >About me</label
                        >
                        <input
                          type="text"
                          name="about me"
                          value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source."
                          class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                        />
                      </div>
                      <button
                        type="button"
                        class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                      >
                        Tambah
                      </button>
                      <button
                        type="button"
                        class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-red-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                      >
                        Hapus
                      </button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
              >
                <img
                  class="w-full rounded-t-2xl"
                  src="../assets/img/bg-profile.jpg"
                  alt="profile cover image"
                />
                <div class="flex flex-wrap justify-center -mx-3">
                  <div class="w-4/12 max-w-full px-3 flex-0">
                    <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
                      <a href="javascript:;">
                        <img
                          class="h-auto max-w-full border-2 border-white border-solid rounded-circle"
                          src="../assets/img/team-2.jpg"
                          alt="profile image"
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="border-black/12.5 rounded-t-2xl p-6 text-center pt-0 pb-6 lg:pt-2 lg:pb-4"
                >
                  <div class="flex justify-between">
                    <button
                      type="button"
                      class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                    >
                      Connect
                    </button>
                    <button
                      type="button"
                      class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                    >
                      <i class="ni ni-collection text-2.8"></i>
                    </button>
                    <button
                      type="button"
                      class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                    >
                      Message
                    </button>
                    <button
                      type="button"
                      class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"
                    >
                      <i class="ni ni-email-83 text-2.8"></i>
                    </button>
                  </div>
                </div>
  
                <div class="flex-auto p-6 pt-0">
                  <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 flex-1-0">
                      <div class="flex justify-center">
                        <div class="grid text-center">
                          <span class="font-bold dark:text-white text-lg">22</span>
                          <span class="leading-normal dark:text-white text-sm opacity-80"
                            >Friends</span
                          >
                        </div>
                        <div class="grid mx-6 text-center">
                          <span class="font-bold dark:text-white text-lg">10</span>
                          <span class="leading-normal dark:text-white text-sm opacity-80"
                            >Photos</span
                          >
                        </div>
                        <div class="grid text-center">
                          <span class="font-bold dark:text-white text-lg">89</span>
                          <span class="leading-normal dark:text-white text-sm opacity-80"
                            >Comments</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 text-center">
                    <h5 class="dark:text-white">
                      Driyo Agung Leksono
                      <span class="font-light">, 35</span>
                    </h5>
                    <div
                      class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700"
                    >
                      <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                      Blora, Cepu
                    </div>
                    <div
                      class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700"
                    >
                      <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
                      Solution Manager - Creative Tim Officer
                    </div>
                    <div class="dark:text-white/80">
                      <i class="mr-2 dark:text-white ni ni-hat-3"></i>
                      University of Computer Science
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
              <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                  <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                    ©
                    <script>
                      document.write(new Date().getFullYear() + ",");
                    </script>
                    made with <i class="fa fa-heart"></i> by
                    <a
                      href="https://www.creative-tim.com"
                      class="font-semibold dark:text-white text-slate-700"
                      target="_blank"
                      >Creative Tim</a
                    >
                    for a better web.
                  </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                  <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                    <li class="nav-item">
                      <a
                        href="https://www.creative-tim.com"
                        class="block px-4 pt-0 pb-1 font-normal transition-colors ease-in-out text-sm text-slate-500"
                        target="_blank"
                        >Creative Tim</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="https://www.creative-tim.com/presentation"
                        class="block px-4 pt-0 pb-1 font-normal transition-colors ease-in-out text-sm text-slate-500"
                        target="_blank"
                        >About Us</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="https://creative-tim.com/blog"
                        class="block px-4 pt-0 pb-1 font-normal transition-colors ease-in-out text-sm text-slate-500"
                        target="_blank"
                        >Blog</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="https://www.creative-tim.com/license"
                        class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-in-out text-sm text-slate-500"
                        target="_blank"
                        >License</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
        
        
      </div>
      
    </main>
    
    
    
    @extends('partial.config')
    
    @endsection
