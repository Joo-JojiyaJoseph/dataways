<nav class="w-full fixed z-50 scrolled transition-all ease-linear py-5" id="navbar">
    <div class="flex items-center justify-between py-4 md:py-3 lg:w-full xl:w-[85%] mx-auto px-4 md:px-4 lg:px-0">
        <div class="">
            <a href="{{ route('home') }}">
                <h1 class="text-white text-4xl">Dataways</h1>
                {{-- @if (request()->routeIs('home'))
                <img src="{{ asset('images/logo/logo-white.svg') }}" alt="" class="w-28 md:w-36 lg:w-44">
                @else
                <img src="{{ asset('images/logo/logo.svg') }}" alt="" class="w-28 md:w-36 lg:w-44" id="logo1">
                <img src="{{ asset('images/logo/logo-white.svg') }}" alt="" class="w-28 md:w-36 lg:w-44 hidden" id="logo2">
                @endif --}}
            </a>
        </div>

        <div class="hidden lg:flex ml-5">
            <ul class="flex items-center justify-around gap-x-4">
                {{-- Home --}}
                <li>
                    <a href="{{ route('home') }}" class="py-4 px-3 relative" :class= "{'text-white' : {{ request()->routeIs('home') }}}">
                        Home
                        @if (request()->routeIs('home'))
                            <div
                                class="absolute h-1 w-6 bg-white  top-5 right-3 mt-5 rounded-full under_line" id="under_line">
                            </div>
                        @endif
                    </a>
                </li>

                  {{-- About --}}
                  <li class="relative group">
                    <a href="" class="py-6 px-3" :class= "{'text-white' : {{ request()->routeIs('home') }}}">
                        About
                        @if (request()->routeIs('about'))
                            <div
                                class="absolute h-1 w-6 bg-dark-blue right-8 rounded-full under_line" id="under_line">
                            </div>
                        @endif

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 inline-flex transition-all duration-300 group-hover:rotate-180 float-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>
                    <div
                        class="bg-white rounded-md shadow-lg w-56 min-h-fit absolute top-10 transition-all duration-300 translate-y-4 opacity-0 pointer-events-none focus-within:opacity-100
                        group-hover:translate-y-0 group-hover:opacity-100 group-hover:pointer-events-auto">
                        <div class="flex flex-col" id="our_story">
                            <a href="" class=" flex items-center justify-between pl-6 pr-4 py-4 text-sm transition-colors duration-150 hover:bg-dark-blue hover:text-white rounded-md">
                                about1
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="" class=" flex items-center justify-between pl-6 pr-4 py-4 text-sm transition-colors duration-150 hover:bg-dark-blue hover:text-white rounded-md">
                                about2
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="" class=" flex items-center justify-between pl-6 pr-4 py-4 text-sm transition-colors duration-150 hover:bg-dark-blue hover:text-white rounded-md">
                                about3
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href=""  class=" flex items-center justify-between pl-6 pr-4 py-4 text-sm transition-colors duration-150 hover:bg-dark-blue hover:text-white rounded-md">
                                About4
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </li>

                   {{-- Blog --}}
                   <li>
                    <a href="" class="py-4 px-3 relative" :class= "{'text-white' : {{ request()->routeIs('home') }}}">
                        Blog

                    </a>
                   </li>

                    {{-- services --}}
                <li>
                    <a href="" class="py-4 px-3 relative" :class= "{'text-white' : {{ request()->routeIs('home') }}}" target="_blank">
                        Services
                    </a>
                </li>

                {{-- Career --}}
                <li>
                    <a href="" class="py-4 px-3 relative" :class= "{'text-white' : {{ request()->routeIs('home') }}}" target="_blank">
                        Career
                    </a>
                </li>

                  {{-- Contact Us --}}
                  <li>
                    <a href="" class="py-2 px-6 rounded-lg relative border-4" :class= "{'text-white' : {{ request()->routeIs('home') }}}" target="_blank">
                        Contact Us
                    </a>
                </li>


            </ul>
        </div>

        {{-- <div class="hidden lg:block">
            <a href="images\culture_book\culture_book.pdf" class="py-4 px-3 relative" download="Infolk Group Culture Book">
                @if (request()->routeIs('home'))
                <button class="px-5 py-2 bg-white rounded-full text-dark-blue text-lg">Culture Book</button>
                @else
                <button class="px-5 py-2 bg-dark-blue rounded-full text-white text-lg culture_book" id="culture">Culture Book</button>
                @endif
            </a>
        </div> --}}

        {{-- <div class="flex lg:hidden">
            @if (request()->routeIs('home'))
            <button x-on:click.prevent="isSideMenuOpen = !isSideMenuOpen" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            @else
            <button x-on:click.prevent="isSideMenuOpen = !isSideMenuOpen" class="text-dark-blue">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            @endif

        </div> --}}
    </div>
</nav>
