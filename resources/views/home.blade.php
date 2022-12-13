<x-app-layout>
    {{-- Title --}}
    <x-slot name="title">gallery</x-slot>


    {{-- Hero Section --}}
    <section class="bg-light-blue  xl:py-10 pt-36  ">

        <div class="container mx-auto relative ">
            <div class="absolute hidden lg:block lg:h-screen  pt-20 ">
                <img class="" src="{{ asset('images/home/Group8068.svg') }}" alt="client" />
            </div>
            <div id="home" class="place-items-center xl:pl-20 pl-5 grid grid-cols-3  lg:grid-cols-2 md:py-20  lg:h-screen ">
                <div
                    class=" ml-20 lg:ml-0 flex items-center flex-col justify-center border-4 border-white rounded-[282px]  h-[300px] w-[320px]  md:h-[500px] md:w-[370px]  xl:h-[600px] xl:w-[370px] 2xl:h-[700px] 2xl:w-[475px] ">
                    <div class="border-8 border-white rounded-[282px]  h-[250px] w-[270px] md:h-[450px] md:w-[325px]  xl:h-[550px] xl:w-[325px] 2xl:h-[650px] 2xl:w-[425px] bg-cover"
                        style="background-image: url({{ asset('images/home/Image40.png') }})">
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1  order-first lg:order-first flex flex-col justify-center w-full  h-full  md:pt-0   ">
                    <h1 class="text-3xl xl:text-6xl md:text-5xl 2xl:text-7xl  font-bold text-white text-left md:py-4 ">
                        THE WAY TO </h1>
                    <h1 class="text-3xl xl:text-6xl md:text-5xl 2xl:text-7xl  font-bold text-sky-blue text-left ">
                        INFINITE THINKING</h1>
                    <p class="text-white 2xl:text-3xl xl:text-2xl py-3 font-semi-bold ">An AI Data Collection Platform
                        From Infolks Group</p>
                </div>
            </div>

        </div>

        <div class=" text-white mx-auto text-center text-2xl p-20 ">
            <p>As a data providing company, Dataways collects and processes supervised training and testing
                datasets, including image, text, audio, video, and 3D Point Cloud for machine learning
                algorithms.We outsource both uncomplicated data collection use cases and lengthy, linguistically
                challenging tasks with our pre-built data collection tools.</p>
        </div>
    </section>
    {{-- End Hero Section --}}


    {{-- how it work --}}
    <section class="bg-light-blue  pb-20 ">
        <div class="container mx-auto">
            <div class="py-10 ">
            <h1 class=" text-3xl 2xl:text-5xl xl:text-4xl font-semibold text-center text-white   ">
                How It <span class="text-sky-blue">Works</span>
            </h1>
            <div class="mx-auto h-1 w-[100px] bg-white  top-5 right-3 mt-5 rounded-full under_line" id="under_line">
            </div>
            </div>

            <div id="home" class="place-items-center mx-auto grid grid-cols-1 gap-y-20 lg:grid-cols-4 xl:pt-10  ">
                {{-- client --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#9572FD] p-2"
                            src="{{ asset('images/home/Group8147.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Client</p>
                </div>


                {{-- meet our team --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#4CE0FE] p-3"
                            src="{{ asset('images/home/Group8149.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Meet our team</p>
                </div>


                {{-- feasibility study --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#921583] p-3"
                            src="{{ asset('images/home/Group8156.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Feasibility Study</p>
                </div>


                {{-- Sample phase --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#DD0062] p-3"
                            src="{{ asset('images/home/Group8160.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Sample Phase</p>
                </div>


                {{-- final export --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#2D97FF] p-3"
                            src="{{ asset('images/home/Group8161.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Final Export</p>
                </div>


                {{-- Data production --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#FBBD4E] p-2"
                            src="{{ asset('images/home/Group8157.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Data Production</p>
                </div>

                {{-- Client feedback --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#8FD1B5] p-3"
                            src="{{ asset('images/home/Group8153.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Data Production</p>
                </div>

                {{-- proposal submit --}}
                <div class="flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <img class="rounded-full xl:h-[70px] xl:w-[70px] bg-[#E272D6] p-3"
                            src="{{ asset('images/home/Group8152.svg') }}" alt="client" />
                    </div>
                    <p class="text-white text-center p-2 text-xl">Proposal Submit</p>
                </div>

            </div>
        </div>
    </section>
    {{-- end how it work --}}


    {{-- our industries --}}
    <section class="bg-dark-blue  pb-20 ">
        <div class="mx-auto">
            <div class="py-10 ">
            <h1 class="text-3xl 2xl:text-5xl xl:text-4xl font-semibold text-center text-white ">
                Our <span class="text-sky-blue">Industries</span>
            </h1>
            <div class="mx-auto h-1 w-[100px] bg-white  top-5 right-3 mt-5 rounded-full under_line" id="under_line">
            </div>
            </div>
            <div id="industries"
                class="container place-items-center mx-auto grid md:grid-cols-2 grid-cols-1 gap-4  lg:grid-cols-2 xl:grid-cols-3">

                {{-- Human attribution --}}
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/human_attribution.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Human attribution
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify   ">We
                                    Over the past decade artificial intelligence that ranges from several applications
                                    has been progressing.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>Over the
                                        past decade artificial intelligence that ranges from several applications has
                                        been progressing.</span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>
                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>
                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Technology --}}
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group  ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/technology.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Technology
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">In the contemporary world, artificial
                                    intelligence and machine learning are emerging phenomena that are
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> that are
                                        applicable to a variety of technologies.</span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Healthcare --}}
                <div class="md:hidden block xl:block 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/healthcare.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Healthcare
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Machine learning has been firmly established
                                    in the medical industry, which has been expanding day by.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> Machine
                                        learning has been firmly established in the medical industry, which has been
                                        expanding day by day.</span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>
                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>
                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- webview our industry --}}

            <div id=""
                class="container hidden  place-items-center mx-auto md:grid md:grid-cols-2 grid-cols-1 gap-4  lg:grid-cols-2 xl:grid-cols-3">
                {{-- Healthcare --}}
                <div class="md:block hidden xl:hidden 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/healthcare.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Healthcare
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Machine learning has been firmly established
                                    in the medical industry, which has been expanding day by.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> Machine
                                        learning has been firmly established in the medical industry, which has been
                                        expanding day by day.</span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>
                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>
                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Retail --}}
                <div class="xl:col-span-2  2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/retail.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Retail
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">In order to create a wonderful online
                                    shopping experience for customers, machine learning and AI are
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> In order
                                        to create a wonderful online shopping experience for customers, machine learning
                                        and AI are currently being used in the retail sector.</span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Automation --}}
                <div class=" 2xl:w-[30rem] 2xl:-translate-x-64 xl:-translate-x-56 lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/automation.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Automation
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">The automotive sector has been completely
                                    transformed by artificial intelligence, which has
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> which has
                                        accelerated the development of autonomous vehicles. </span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Agriculture --}}
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/agriculture.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Agriculture
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Different digital technologies, including
                                    AI, are being adopted by farmers in various nations.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> Different
                                        digital technologies, including AI, are being adopted by farmers in various
                                        nations. </span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Logistics --}}
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/logistics.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Logistics
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Large-scale data analysis and better
                                    logistics management are made possible by machine learning
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>
                                        Large-scale data analysis and better logistics management are made possible by
                                        machine learning for logistics service providers. </span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sports --}}
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/sports.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Sports
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">In this new generation's sports and gaming,
                                    AI is becoming an increasingly prevalent phenomena for
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> In this
                                        new generation's sports and gaming, AI is becoming an increasingly prevalent
                                        phenomena for the purpose of player tracking, player segmentation, action
                                        identification, player position tracking etc. </span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>
                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Financial Services --}}
                <div class="xl:col-span-2  2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/financial_services.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Financial Services
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">AI is applied in finance to provide a
                                    solution that may change how we distribute credit and risk, leading to
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>AI is
                                        applied in finance to provide a solution that may change how we distribute
                                        credit and risk, leading to better, more competitive systems</span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Government --}}
                <div class=" 2xl:w-[30rem] 2xl:-translate-x-64 xl:-translate-x-56 lg:w-[25rem]  w-auto p-5 group ">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/government.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Government
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">By automating a variety of labor-intensive
                                    data processing and analysis processes, machine learning.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>By
                                        automating a variety of labor-intensive data processing and analysis processes,
                                        machine learning can enhance the government. </span>
                                </p>
                                <div class="flex justify-end pt-2">
                                    <span x-show="! open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                    </span>
                                    <span x-show="open" x-cloak>
                                        <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                    </span>
                                    <a x-on:click="open = ! open">

                                        <span x-show="open" x-cloak>

                                            <div
                                                class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>

                                        <span x-show="! open" x-cloak>

                                            <div
                                                class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- end webview our industry --}}

            {{-- ============ mobileview our industry =================== --}}
            <div x-data=" { open: false }"
                class="container md:hidden  place-items-center mx-auto grid md:grid-cols-2 grid-cols-1 gap-4  lg:grid-cols-2 xl:grid-cols-3">
                <span x-show="open" @click.outside="open = false" x-transition x-cloak>

                    {{-- Retail --}}
                    <div class="xl:col-span-2  2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/retail.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Retail
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">In order to create a wonderful online
                                        shopping experience for customers, machine learning and AI are
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> In
                                            order
                                            to create a wonderful online shopping experience for customers, machine
                                            learning
                                            and AI are currently being used in the retail sector.</span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>

                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Automation --}}
                    <div class=" 2xl:w-[30rem] 2xl:-translate-x-64 xl:-translate-x-56 lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/automation.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Automation
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">The automotive sector has been
                                        completely
                                        transformed by artificial intelligence, which has
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> which
                                            has
                                            accelerated the development of autonomous vehicles. </span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>

                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Agriculture --}}
                    <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/agriculture.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Agriculture
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">Different digital technologies,
                                        including
                                        AI, are being adopted by farmers in various nations.
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>
                                            Different
                                            digital technologies, including AI, are being adopted by farmers in various
                                            nations. </span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>

                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Logistics --}}
                    <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/logistics.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Logistics
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">Large-scale data analysis and better
                                        logistics management are made possible by machine learning
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>
                                            Large-scale data analysis and better logistics management are made possible
                                            by
                                            machine learning for logistics service providers. </span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>

                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Sports --}}
                    <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/sports.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Sports
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">In this new generation's sports and
                                        gaming,
                                        AI is becoming an increasingly prevalent phenomena for
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> In
                                            this
                                            new generation's sports and gaming, AI is becoming an increasingly prevalent
                                            phenomena for the purpose of player tracking, player segmentation, action
                                            identification, player position tracking etc. </span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>
                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Financial Services --}}
                    <div class="xl:col-span-2  2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/financial_services.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Financial Services
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">AI is applied in finance to provide a
                                        solution that may change how we distribute credit and risk, leading to
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>AI is
                                            applied in finance to provide a solution that may change how we distribute
                                            credit and risk, leading to better, more competitive systems</span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>

                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Government --}}
                    <div class=" 2xl:w-[30rem] 2xl:-translate-x-64 xl:-translate-x-56 lg:w-[25rem]  w-auto p-5 group ">
                        <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                            <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                                <div class="h-36 lg:h-48 w-full">
                                    <img alt="" class="object-cover border-1 rounded-3xl h-full w-full"
                                        src="{{ asset('images/home/government.png') }}" />
                                </div>
                                <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                    <div class=" flex flex-col justify-center ">
                                        <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                            Government
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify">By automating a variety of
                                        labor-intensive
                                        data processing and analysis processes, machine learning.
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>By
                                            automating a variety of labor-intensive data processing and analysis
                                            processes,
                                            machine learning can enhance the government. </span>
                                    </p>
                                    <div class="flex justify-end pt-2">
                                        <span x-show="! open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read more</p>
                                        </span>
                                        <span x-show="open" x-cloak>
                                            <p class="text-dark-blue pr-3 pt-1 font-bold">Read less</p>
                                        </span>
                                        <a x-on:click="open = ! open">

                                            <span x-show="open" x-cloak>

                                                <div
                                                    class="h-8 bg-white group-hover:bg-white w-8 rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue -rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>

                                            <span x-show="! open" x-cloak>

                                                <div
                                                    class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor"
                                                        class=" fill-dark-blue w-6 h-6 stroke-dark-blue hover:rotate-90">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <a x-on:click="open = ! open" class="flex justify-center pt-5">
                    <span x-show="open" class="block md:hidden text-center text-white bg-light-gray p-1 px-5 rounded-3xl " x-cloak>Less

                    </span>

                    <span x-show="! open" class="block md:hidden  text-white bg-light-gray p-1 px-5 rounded-3xl " x-cloak>More
                    </span>

                </a>
            </div>
            {{-- End mobileview our industry --}}
        </div>
    </section>
    {{-- End our industries --}}


</x-app-layout>
