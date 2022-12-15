<div class="w-full text-white bg-dark-blue ">
    <div class="bg-[#1B00A7] rounded-t-[150px] pt-10">
        <div class=" lg:container mx-auto px-5 md:px-2 xl:px-10  ">
            <div class="flex flex-col lg:pb-0 lg:flex-row md:p-20  justify-between lg:border-b lg:border-white/75">
                {{-- Footer Logo --}}
                <div class="h-60 md:h-72 md:-translate-y-8">
                    <img src="{{ asset('images/logo/logo-footer.svg') }}" class="h-full w-full pt-8" alt="dataways">
                </div>
                 <div class="hidden lg:block lg:border-r h-60 lg:border-white/75"></div>
                {{-- Home --}}
                <div class="hidden lg:block">
                    <h5 class="font-medium md:text-xl py-2">Our Industries</h5>
                    <h5 class="font-medium md:text-xl py-2">Services</h5>
                    <ul class=" font-light text-sm md:text-base space-y-2">
                        <li>
                            <a href="{{ route('home') }}">Image Data Collection </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Text Data Collection</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Video Data Collection</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Audio Data Collection</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">3D Point Cloud</a>
                        </li>

                    </ul>
                </div>

   {{-- our industry Mobile --}}
   <div x-data="{ our_industry: false, entities_mobile: false }" class="border-b border-white py-4 sm:hidden">
    <button @click="our_industry = !our_industry" class="flex items-center justify-between w-full">
        <p class="font-medium text-white">Our Industries</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            class="w-5 h-5 transition-transform duration-150" :class="{ 'rotate-45': our_industry }">
            <path
                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
        </svg>
    </button>
    <div x-show="our_industry" x-collapse  x-cloak>
        <ul class="text-sm font-light py-2 space-y-2">
            <li>
                <a href="">Our Industries</a>
            </li>

            <li>
                <a href="">Our Industries</a>
            </li>
        </ul>
    </div>
</div>

    {{-- our service Mobile --}}
    <div x-data="{ services: false }" class="border-b border-white py-2 sm:hidden">
        <button @click="services = !services" class="flex items-center justify-between w-full">
            <p class="font-medium">Our Services</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                class="w-5 h-5 transition-transform duration-150" :class="{ 'rotate-45': services }">
                <path
                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
            </svg>
        </button>
        <div x-show="services" x-collapse  x-cloak>
            <ul class="text-sm font-light py-2 space-y-2">
                <li>
                    <a href="">Our Services</a>
                </li>

            </ul>
        </div>
    </div>






                <div class="hidden lg:block lg:border-r h-60 lg:border-white/75"></div>
                {{-- Contact --}}
                <div class="mt-5 md:mt-0 lg:block">

                    <ul class=" font-light space-y-2">
                        <li class=" sm:block">
                            <div class="flex items-start gap-x-3 text-sm md:text-base md:mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="h-4 w-4 md:w-5 md:h-5 font-semibold">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z">
                                    </path>
                                </svg>
                                <div class="font-light">
                                    <p class="font-semibold">Head Office</p>
                                    <p>Dataways, Infolks Tower, Mannarkkad,</p>
                                    <p> Kerala, India 678583</p>
                                </div>
                            </div>
                        </li>

                        <li class="pt-8">
                            <div class="flex items-start gap-x-3 text-sm md:text-base pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-semibold">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>

                                <div class="font-light">
                                    <p> customersupport@dataways.ai</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-start gap-x-3 text-sm md:text-base pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-semibold">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>

                                +91 87147 36133
                                <div class="font-light">
                                </div>
                            </div>
                        </li>

                        <div class="block lg:hidden border-t h-1 border-white/75 pt-5"></div>
                        <ul class="flex items-center justify-center lg:justify-start gap-x-4 lg:gap-x-8 xl:pt-10 pt-5 xl:pl-3">
                            <li>
                                <a href="" target="_blank">
                                    <img src="{{ asset('images/icons/facebook.svg') }}" class="h-3 w-3 md:h-4 md:w-4"
                                        alt="facebook">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <img src="{{ asset('images/icons/twitter.svg') }}" class="h-3 w-3 md:h-4 md:w-4"
                                        alt="twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/infolks_group" target="_blank">
                                    <img src="{{ asset('images/icons/instagram.svg') }}" class="h-3 w-3 md:h-4 md:w-4"
                                        alt="instagram">
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/company/infolks/" target="_blank">
                                    <img src="{{ asset('images/icons/linkedin.svg') }}" class="h-3 w-3 md:h-4 md:w-4"
                                        alt="linkedin">
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UC0siki2wYSW7QZ1UuSDeYsQ" target="_blank">
                                    <img src="{{ asset('images/icons/youtube.svg') }}" class="h-3 w-3 md:h-4 md:w-4"
                                        alt="youtube">
                                </a>
                            </li>
                        </ul>

                    </ul>
                </div>


            </div>

            <div class=" md:p-20 flex flex-col lg:flex-row gap-y-6 lg:gap-y-0 lg:items-center justify-between px-5 lg:px-0 py-6 lg:py-8 w-full">
                <div class="hidden lg:flex items-center justify-between lg:justify-start gap-x-8 font-light text-xs md:text-sm">
                    <p>Priavcy Policy</p>
                </div>
                <div class="font-light text-center lg:text-start text-xs lg:text-sm">
                    <p>Copyright © 2022. All rights reserved by Dataways</p>
                </div>
                <div class="hidden lg:block font-light text-center lg:text-start text-xs lg:text-sm">
                    <p>
                        Terms & Conditions
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
