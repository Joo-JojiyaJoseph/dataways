<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed lg:hidden inset-0 z-50 flex items-end bg-white bg-opacity-50 sm:items-center sm:justify-center" x-cloak>
</div>
<aside class="fixed inset-y-0 right-0 z-50 flex-shrink-0 w-full overflow-y-auto bg-white lg:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-40" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform translate-x-40" @click.outside="isSideMenuOpen = false"
    @keydown.escape="isSideMenuOpen = false"  x-cloak>
    <div class="flex items-center justify-between px-6 py-8">
        <img src="{{ asset('images/logo/logo.svg') }}" alt="" class="w-28">
        <button @click="isSideMenuOpen = false" class="text-nav-blue">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div>
        <ul class="text-nav-blue px-8 space-y-6">

            {{-- Home --}}
            <li>
                <a href="{{ route('home') }}" class="flex items-center justify-between w-full">
                    Home
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>

            {{-- About --}}
            <li>
                <li>
                    <a href="}" class="flex items-center justify-between w-full">
                        About
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
            </li>
            </li>


            {{-- Blog --}}
            <li>
                <a href="" class="flex items-center justify-between w-full">
                    Blogs
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                     </svg>
                </a>
            </li>

            {{-- Career --}}
            <li>
                <a href="" class="flex items-center justify-between w-full">
                    Careers
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                     </svg>
                </a>
            </li>

            {{-- Contact Us --}}
            <li>
                <a href="" class="flex items-center justify-between w-full">
                    Contact Us
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                     </svg>
                </a>
            </li>


        </ul>
    </div>
</aside>
