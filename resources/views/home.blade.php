<x-app-layout>
    {{-- Title --}}
    <x-slot name="title">gallery</x-slot>


    {{-- Hero Section --}}
    <section class="bg-light-blue  pb-20 ">
        <div class="container mx-auto">
            <div id="home" class="grid grid-cols-2  lg:grid-cols-2 xl:pt-20  lg:h-screen ">
                <div
                    class=" flex items-center flex-col justify-center border-4 border-white rounded-[282px] xl:h-[550px] xl:w-[400px]">
                    <div class="border-8 border-white rounded-[282px] xl:h-[500px] xl:w-[350px] bg-cover"
                        style="background-image: url({{ asset('images/home/Image40.png') }})">
                    </div>
                </div>
                <div
                    class=" p-10 order-last lg:order-first flex flex-col justify-center w-full  h-full pt-10 md:pt-0   ">
                    <h1 class="text-4xl md:text-6xl 2xl:text-7xl  font-bold text-white text-left md:py-4 ">
                        THE WAY TO </h1>
                    <h1 class="text-4xl md:text-6xl 2xl:text-7xl  font-bold text-sky-blue text-left ">
                        INFINITE THINKING</h1>
                    <p class="text-white text-lg  md:text-xl ">An AI Data Collection Platform From Infolks Group</p>
                </div>
            </div>
            <div class="container text-white mx-auto text-center ">
                <p>As a data providing company, Dataways collects and processes supervised training and testing
                    datasets, including image, text, audio, video, and 3D Point Cloud for machine learning
                    algorithms.We outsource both uncomplicated data collection use cases and lengthy, linguistically
                    challenging tasks with our pre-built data collection tools.</p>
            </div>
        </div>
    </section>

    {{-- End Hero Section --}}


    {{-- our industries --}}
    <section class="bg-dark-blue  pb-20 ">
        <div class="mx-auto">
            <h1 class="text-3xl 2xl:text-5xl font-semibold text-center text-white py-10 ">
                Our <span class="text-sky-blue">Industries</span>
            </h1>
            <div id="industries" class="container place-items-center mx-auto grid md:grid-cols-2 grid-cols-1 gap-4  lg:grid-cols-2 xl:grid-cols-3">

                {{-- Human attribution --}}
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
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
                <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group  " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/technology.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Technology
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">In the contemporary world, artificial intelligence and machine learning are emerging phenomena that are
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> that are applicable to a variety of technologies.</span>
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
                 <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/healthcare.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Healthcare
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Machine learning has been firmly established in the medical industry, which has been expanding day by.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> Machine learning has been firmly established in the medical industry, which has been expanding day by day.</span>
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

            <div  id="" class="container place-items-center mx-auto grid md:grid-cols-2 grid-cols-1 gap-4  lg:grid-cols-2 xl:grid-cols-3">

                 {{-- Retail--}}
                 <div class="xl:col-span-2  2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/retail.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Retail
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">In order to create a wonderful online shopping experience for customers, machine learning and AI are
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> In order to create a wonderful online shopping experience for customers, machine learning and AI are currently being used in the retail sector.</span>
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

                 {{-- Automation--}}
                 <div class=" 2xl:w-[30rem] 2xl:-translate-x-64 xl:-translate-x-56 lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/automation.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Automation
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">The automotive sector has been completely transformed by artificial intelligence, which has
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> which has accelerated the development of autonomous vehicles. </span>
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

                 {{-- Agriculture--}}
                 <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/agriculture.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Agriculture
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Different digital technologies, including AI, are being adopted by farmers in various nations.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> Different digital technologies, including AI, are being adopted by farmers in various nations. </span>
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

                 {{-- Logistics--}}
                 <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/logistics.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Logistics
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">Large-scale data analysis and better logistics management are made possible by machine learning
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> Large-scale data analysis and better logistics management are made possible by machine learning for logistics service providers. </span>
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

                 {{-- Sports--}}
                 <div class=" 2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/sports.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Sports
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">In this new generation's sports and gaming, AI is becoming an increasingly prevalent phenomena for
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> In this new generation's sports and gaming, AI is becoming an increasingly prevalent phenomena for the purpose of player tracking, player segmentation, action identification, player position tracking etc. </span>
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

                 {{-- Financial Services--}}
                 <div class="xl:col-span-2  2xl:w-[30rem] lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/financial_services.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Financial Services
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">AI is applied in finance to provide a solution that may change how we distribute credit and risk, leading to
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>AI is applied in finance to provide a solution that may change how we distribute credit and risk, leading to better, more competitive systems</span>
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

                 {{-- Government--}}
                 <div class=" 2xl:w-[30rem] 2xl:-translate-x-64 xl:-translate-x-56 lg:w-[25rem]  w-auto p-5 group " id="unique">
                    <div class=" h-full w-full md:border-1 rounded-3xl bg-white  "
                        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 12px;">
                        <div x-data="{ open: false }" class="relative h-full w-full flex flex-col ">
                            <div class="h-36 lg:h-48 w-full">
                                <img alt="" class=" border-1 rounded-3xl h-full w-full"
                                    src="{{ asset('images/home/government.png') }}" />
                            </div>
                            <div class=" bg-white p-5 h-auto rounded-3xl  ">
                                <div class=" flex flex-col justify-center ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl ">
                                        Government
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify">By automating a variety of labor-intensive data processing and analysis processes, machine learning.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>By automating a variety of labor-intensive data processing and analysis processes, machine learning can enhance the government. </span>
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
        </div>
    </section>

    {{-- End our industries --}}



</x-app-layout>
