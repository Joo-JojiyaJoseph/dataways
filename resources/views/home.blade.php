<x-app-layout>
    {{-- Title --}}
    <x-slot name="title">gallery</x-slot>

     {{-- Hero Section --}}
     <section class="bg-light-blue  xl:pb-10 pt-20  overflow-hidden ">

        <div class="container mx-auto relative ">
            <div class="absolute hidden lg:block   pt-20 ">
                <img class="" src="{{ asset('images/home/Group8068.svg') }}" alt="client" />
            </div>
            <div id="home"
                class="place-items-center xl:pl-20 pl-5 grid grid-cols-3  lg:grid-cols-2 md:py-20  lg:h-screen ">
                <div
                    class=" ml-20 lg:ml-0 flex items-center flex-col justify-center border-4 border-white rounded-[282px]  h-[280px] w-[300px]  md:h-[500px] md:w-[370px]  xl:h-[600px] xl:w-[370px] 2xl:h-[700px] 2xl:w-[475px] ">
                    <div class="border-8 border-white rounded-[282px]  h-[230px] w-[250px] md:h-[450px] md:w-[325px]  xl:h-[550px] xl:w-[325px] 2xl:h-[650px] 2xl:w-[425px] bg-cover "
                        style="background-image: url({{ asset('images/home/hero.png') }})">
                    </div>
                </div>
                <div
                    class="col-span-2 lg:col-span-1  order-first lg:order-first flex flex-col justify-center w-full  h-full  md:pt-0   ">
                    <h1 class="text-3xl xl:text-6xl md:text-5xl 2xl:text-7xl  font-bold text-white text-left md:py-4 ">
                        THE WAY TO </h1>
                    <h1 class="text-3xl xl:text-6xl md:text-5xl 2xl:text-7xl  font-bold text-sky-blue text-left ">
                        INFINITE THINKING</h1>
                    <p class="text-white 2xl:text-3xl xl:text-2xl py-3 font-semi-bold ">An AI Data Collection Platform
                        From Infolks Group</p>
                </div>
            </div>
        </div>

    </section>
    {{-- End Hero Section --}}

     {{-- content--}}
    <section class="bg-light-blue py-10 ">
        <div class="container  mx-auto text-center  ">
            <p class=" text-white  text-center xl:text-2xl  ">As a data providing company, Dataways collects and processes supervised training and testing
                datasets, including image, text, audio, video, and 3D Point Cloud for machine learning
                algorithms.We outsource both uncomplicated data collection use cases and lengthy, linguistically
                challenging tasks with our pre-built data collection tools.</p>
        </div>
    </section>
     {{-- End content --}}

    {{-- how it work --}}
    <section class="bg-light-blue  pb-20 ">
        <div class="container mx-auto">
            <div class="py-10 ">
                <h1 class=" text-3xl 2xl:text-6xl xl:text-4xl font-semibold text-center text-white   ">
                    How It <span class="text-sky-blue">Works</span>
                </h1>
                <div class="mx-auto h-1 w-[100px] bg-white  top-5 right-3 mt-5 rounded-full under_line" id="under_line">
                </div>
            </div>

            <div id="how_it_work"
                class="relative place-items-center mx-auto grid grid-cols-1 gap-y-20 lg:grid-cols-2 xl:grid-cols-4 xl:pt-10  ">
                {{-- <div class="flex  items-center relative"> --}}
                <div class="hidden lg:block absolute mx-auto h-1 xl:w-[85%] w-[66%] bg-white lg:-translate-y-36 lg:translate-x-36  xl:-translate-y-1 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                <div class="block lg:hidden xl:block absolute mx-auto xl:h-[11.8rem] 2xl:h-[11.8rem] h-full w-1 bg-white translate-y-10  xl:translate-y-10 xl:-translate-x-[1.28rem] 2xl:-translate-x-[2.4rem] top-5 xl:top-[1.6rem] xl:right-3  mt-5 rounded-full under_line"
                    id="under_line">
                </div>

                {{-- lg line feasibility --}}
                <div class="hidden lg:block xl:hidden absolute mx-auto h-1 xl:w-[85%] w-[94%] bg-white lg:translate-y-[7.7rem] lg:-translate-x-0  xl:-translate-y-2 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                {{-- end lg line feasibility --}}

                {{-- lg feasibility vertical line --}}
                <div class="hidden lg:block xl:hidden absolute mx-auto h-[59%] xl:w-[85%] w-1 bg-white lg:-translate-y-[0.75rem] lg:translate-x-[0.2rem] right-8  xl:-translate-y-2 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                {{-- end lg feasibility vertical line --}}

                {{-- lg sample phase vertical line --}}
                <div class="hidden lg:block xl:hidden absolute mx-auto h-[62%] xl:w-[85%] w-1 bg-white lg:translate-y-[16.6rem] lg:-translate-x-[0.1rem] left-8  xl:-translate-y-2 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                {{-- end lg sample phase vertical line --}}



                {{-- client --}}
                <div class="flex relative">
                    <div class="flex flex-col items-center">
                        <div
                            class="z-0 flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#9572FD]">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8147.svg') }}" alt="client" />
                            </div>
                        </div>
                        <p
                            class="lg:text-white text-[#9572FD] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Client</p>
                    </div>
                    <div
                        class="absolute mt-1 2xl:translate-x-52  xl:translate-x-44 lg:translate-x-[18rem] lg:translate-y-[2.5rem]  translate-x-[2.2rem] translate-y-48 xl:translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class=" w-18 xl:w-20 h-20 fill-[#9572FD] stroke-none rotate-90 lg:rotate-0"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- meet our team --}}
                <div class="flex relative">
                    <div class=" z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                        <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#4CE0FE]">
                            <img class="w-20 h-20 xl:w-12 xl:h-12" src="{{ asset('images/home/Group8149.svg') }}" alt="team" />
                        </div>
                    </div>
                        <p
                            class="lg:text-white text-[#4CE0FE] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Meet our team</p>
                    </div>
                    <div
                        class="absolute mt-1 2xl:translate-x-52 lg:translate-x-[17.1rem] xl:translate-x-44 translate-x-12 translate-y-48 xl:translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-18 xl:w-20 h-20 fill-[#4CE0FE] stroke-none  rotate-90 xl:rotate-0"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- feasibility study --}}
                <div class="block lg:hidden xl:flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                           <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#921583] ">
                            <img class="w-20 h-20 xl:w-12 xl:h-12"
                            src="{{ asset('images/home/Group8156.svg') }}" alt="feasibility" />
                           </div>
                        </div>
                        <p
                            class="xl:text-white text-[#921583] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white xl:bg-transparent rounded-3xl xl:rounded-0">
                            Feasibility Study</p>
                    </div>
                    <div
                        class="absolute mt-1 2xl:translate-x-52 xl:translate-x-44 translate-x-[3.5rem]  xl:translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-18 xl:w-20 h-20 fill-[#921583] stroke-none rotate-90 xl:rotate-0"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- Sample phase --}}
                <div class="block lg:hidden xl:flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#DD0062] ">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8160.svg') }}" alt="sample" />
                            </div>
                        </div>
                        <p
                            class="xl:text-white text-[#DD0062] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white xl:bg-transparent rounded-3xl xl:rounded-0">
                            Sample Phase</p>
                    </div>
                    <div
                        class="absolute  2xl:translate-x-[10.82rem] xl:translate-x-[9.92rem] xl:translate-y-28 translate-x-[2.9rem] ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-18 xl:w-20 h-20 fill-[#DD0062] stroke-none rotate-90 xl:rotate-90"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- lg feasibility ,samplephase --}} {{-- feasibility study --}}

                {{-- lg Sample phase --}}
                <div class="hidden xl:hidden lg:flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                            <div class="flex justify-center place-items-center  rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#DD0062] ">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8160.svg') }}" alt="sample" />
                            </div>

                        </div>
                        <p
                            class="lg:text-white text-[#DD0062] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Sample Phase</p>
                    </div>
                    <div
                        class="absolute lg:-translate-x-[11rem]  2xl:translate-x-44 xl:translate-x-[10rem] xl:translate-y-28 translate-x-[2.9rem] translate-y-48">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-18 xl:w-20 h-20 fill-[#DD0062] stroke-none rotate-90 xl:rotate-90"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- lg feasibility study --}}
                <div class="hidden xl:hidden lg:flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                           <div class="flex justify-center place-items-center  rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#921583] ">
                            <img class="w-20 h-20 xl:w-12 xl:h-12"
                            src="{{ asset('images/home/Group8156.svg') }}" alt="client" />
                           </div>
                        </div>
                        <p
                            class="lg:text-white text-[#921583] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Feasibility Study</p>
                    </div>
                    <div
                        class="absolute mt-1 2xl:translate-x-52 xl:translate-x-44 translate-x-[3.5rem] lg:-translate-x-48 lg:translate-y-10 translate-y-48 xl:translate-y-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-18 xl:w-20 h-20 fill-[#921583] stroke-none rotate-90 lg:rotate-180 xl:rotate-0"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>


                {{-- lg end feasibility,sample phase --}}

            </div>

            {{-- webview 2nd grid --}}
            <div id="how_it_work"
                class="hidden  relative place-items-center mx-auto xl:grid grid-cols-1 gap-y-20 lg:grid-cols-4 xl:pt-10 pt-16 ">
                <div class="hidden mt-2 xl:block absolute mx-auto h-1 w-[85%] bg-white  -translate-y-2 translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>

                {{-- final export --}}
                <div class="z-0 flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                        <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] bg-[#2D97FF] ">
                            <img class="w-20 h-20 xl:w-12 xl:h-12"
                            src="{{ asset('images/home/Group8161.svg') }}" alt="client" />
                        </div>

                    </div>
                    <p class="text-white text-center p-2 text-xl">Final Export</p>
                </div>

                {{-- Data production --}}
                <div class="flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] bg-[#FBBD4E] ">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8157.svg') }}" alt="client" />
                            </div>

                        </div>
                        <p class="text-white text-center p-2 text-xl">Data Production</p>
                    </div>
                    <div class="absolute mt-2 2xl:-translate-x-36 xl:-translate-x-32">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-20 h-20 fill-[#FBBD4E] stroke-none rotate-180" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- Client feedback --}}
                <div class="flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] bg-[#8FD1B5] ">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8153.svg') }}" alt="client" />
                            </div>

                        </div>
                        <p class="text-white text-center p-2 text-xl">Client feedback</p>
                    </div>
                    <div class="absolute mt-2 2xl:-translate-x-36 xl:-translate-x-32">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-20 h-20 fill-[#8FD1B5] stroke-none rotate-180" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- proposal submit --}}
                <div class="flex relative ">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] bg-[#E272D6] ">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8152.svg') }}" alt="proposal" />
                            </div>

                        </div>
                        <p class="text-white text-center p-2 text-xl">Proposal Submit</p>
                    </div>
                    <div class="absolute mt-2 2xl:-translate-x-36 xl:-translate-x-32">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-20 h-20 fill-[#E272D6] stroke-none rotate-180" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

            </div>
            {{-- end webview 2nd grid --}}

            {{-- mobileview 2nd grid --}}
            <div id="how_it_work"
                class=" xl:hidden  relative place-items-center mx-auto grid grid-cols-1 gap-y-20 lg:grid-cols-2 xl:pt-10 lg:pt-20 pt-16 ">
                <div class="hidden mt-2 xl:block absolute mx-auto h-1 w-[85%] bg-white  -translate-y-2 translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                <div class="lg:hidden block absolute mx-auto xl:h-48 h-[85%] w-1 bg-white translate-y-4  xl:translate-y-10 xl:-translate-x-4 2xl:-translate-x-8  top-5 xl:right-3  mt-5 rounded-full under_line"
                    id="under_line">
                </div>

                {{-- lg data production vertical line --}}
                <div class="hidden lg:block xl:hidden absolute mx-auto h-[48%] xl:w-[85%] w-1 bg-white lg:translate-y-[2.6rem] lg:translate-x-[0.1rem] right-8  xl:-translate-y-2 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                {{-- end lg data production vertical line --}}

                {{-- lg line proposal  submmit --}}
                <div class="hidden lg:block xl:hidden absolute mx-auto h-1 xl:w-[85%] w-[94%] bg-white lg:-translate-y-[5.5rem] lg:-translate-x-0  xl:-translate-y-2 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                {{-- end lg line proposal  submmit --}}

                {{-- lg line data production --}}
                <div class="hidden lg:block xl:hidden absolute mx-auto h-1 xl:w-[85%] w-[66%] bg-white lg:translate-y-[10.5rem] lg:translate-x-36  xl:-translate-y-2 xl:translate-x-16 rounded-full under_line"
                    id="under_line">
                </div>
                {{-- end lg line data production --}}


                {{-- proposal submit --}}
                <div class="flex relative ">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                           <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#E272D6] ">
                            <img class="w-20 h-20 xl:w-12 xl:h-12"
                            src="{{ asset('images/home/Group8152.svg') }}" alt="client" />
                           </div>

                        </div>
                        <p
                            class="lg:text-white text-[#E272D6] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Proposal Submit</p>
                    </div>
                    <div
                        class="absolute mt-2 2xl:-translate-x-36 lg:translate-x-[20rem] lg:translate-y-12  xl:-translate-x-32 translate-x-[3.5rem] translate-y-48 ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-20 h-20 fill-[#E272D6] stroke-none rotate-90 xl:rotate-90 lg:rotate-0"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- Client feedback --}}
                <div class="flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                            <div class="flex justify-center place-items-center  rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#8FD1B5]">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8153.svg') }}" alt="client" />
                            </div>

                        </div>
                        <p
                            class="lg:text-white text-[#8FD1B5] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Client feedback</p>
                    </div>
                    <div
                        class="absolute mt-2 lg:translate-x-[17.1rem] 2xl:-translate-x-36 xl:-translate-x-32 translate-x-[3.3rem] translate-y-48">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 fill-[#8FD1B5] stroke-none rotate-90"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- Data production --}}
                <div class="block lg:hidden xl:flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#FBBD4E]">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8157.svg') }}" alt="data" />
                            </div>

                        </div>
                        <p
                            class="xl:text-white text-[#FBBD4E] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white xl:bg-transparent rounded-3xl xl:rounded-0">
                            Data Production</p>
                    </div>
                    <div class="absolute mt-2 2xl:-translate-x-36 xl:-translate-x-32 translate-x-[3.4rem] ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 fill-[#FBBD4E] stroke-none rotate-90"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>

                {{-- final export --}}
                <div class="z-0 block lg:hidden xl:flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                        <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#2D97FF]">
                            <img class="w-20 h-20 xl:w-12 xl:h-12"
                            src="{{ asset('images/home/Group8161.svg') }}" alt="final" />
                        </div>
                    </div>
                    <p
                        class="xl:text-white text-[#2D97FF] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white xl:bg-transparent rounded-3xl xl:rounded-0">
                        Final Export</p>
                </div>

                {{-- lg client feedback,final export --}}

                {{-- lg final export --}}
                <div class="z-0 hidden xl:hidden lg:flex flex-col items-center">
                    <div
                        class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                        <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#2D97FF]">
                            <img class="w-20 h-20 xl:w-12 xl:h-12"
                            src="{{ asset('images/home/Group8161.svg') }}" alt="final" />
                        </div>

                    </div>
                    <p
                        class="lg:text-white text-[#2D97FF] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                        Final Export</p>
                </div>

                {{-- lg Data production --}}
                <div class="hidden xl:hidden lg:flex relative">
                    <div class="z-0 flex flex-col items-center">
                        <div
                            class=" flex items-center flex-col justify-center border-8 border-white rounded-full xl:h-[100px] xl:w-[100px] h-[150px] w-[150px]">
                            <div class="flex justify-center place-items-center rounded-full xl:h-[70px] xl:w-[70px] h-[120px] w-[120px] bg-[#FBBD4E]">
                                <img class="w-20 h-20 xl:w-12 xl:h-12"
                                src="{{ asset('images/home/Group8157.svg') }}" alt="data" />
                            </div>
                        </div>
                        <p
                            class="lg:text-white text-[#FBBD4E] text-center xl:p-2 p-1 xl:px-2 px-6 text-xl bg-white lg:bg-transparent rounded-3xl lg:rounded-0">
                            Data Production</p>
                    </div>
                    <div
                        class="absolute mt-2 2xl:-translate-x-36 lg:-translate-x-48 lg:translate-y-10 xl:-translate-x-32 translate-x-[3.4rem] translate-y-48">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-20 h-20 fill-[#FBBD4E] stroke-none rotate-90 xl:rotate-90 lg:rotate-180"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>


                {{-- end  lg client feedback,final export --}}

            </div>
            {{-- end mobileview 2nd grid --}}


        </div>
    </section>
    {{-- end how it work --}}


    {{-- our industries --}}
    <section class="bg-dark-blue  pb-20 ">
        <div class="mx-auto">
            <div class="py-10 ">
                <h1 class="text-3xl 2xl:text-6xl xl:text-4xl font-semibold text-center text-white ">
                    Our <span class="text-sky-blue">Industries</span>
                </h1>
                <div class="mx-auto h-1 w-[100px] bg-white  top-5 right-3 mt-5 rounded-full under_line"
                    id="under_line">
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Human attribution
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl    ">We
                                    Over the past decade artificial intelligence that ranges from several applications has been progressing in the field of contactless
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>personal identification to recognize human features like face and body attribution for various purposes.  We have a database that contains data gathered by our team of highly motivated individuals using pre-built tools that have been developed using very latest innovation.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl 2xl:text-4xl">
                                        Technology
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">In the contemporary world, artificial intelligence and machine learning are emerging phenomena that are applicable to a variety of
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>technologies. It is crucial to have a lot of premium training data in order to guarantee its effectiveness. In order to produce cutting-edge products and enhance the customer experience, search engines and other top technology organizations use machine learning. They need big, high-quality datasets, not just any kind of data will suffice for these algorithms.</span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl">
                                        Healthcare
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">Machine learning has been firmly established in the medical industry, which has been expanding day by day. It  has a strong potential
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> to completely transform the healthcare industry by assisting in the handling of extremely huge volumes of data. Large medical data sets are processed for insights that can be implemented to improve clinical decision-making, patient outcomes, automate daily tasks for health practitioners, speed up medical research, and increase operational effectiveness.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Healthcare
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">Machine learning has been firmly established in the medical industry, which has been expanding day by day. It  has a strong potential
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>to completely transform the healthcare industry by assisting in the handling of extremely huge volumes of data. Large medical data sets are processed for insights that can be implemented to improve clinical decision-making, patient outcomes, automate daily tasks for health practitioners, speed up medical research, and increase operational effectiveness.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Retail
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">In order to create a wonderful online shopping experience for customers, machine learning and AI are currently being used in the retail sector.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> We offer high-quality training data sets for AI algorithms that can improve the retail sector, including data gathered from sales, barcodes, and other sources. With the aid of our top-notch training data, Dataways is here to assist you in developing and obtaining the optimization of your AI solutions for client delivery, search engine optimization, and more.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Automation
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">The automotive sector has been completely transformed by artificial intelligence, which has accelerated the development of  autonomous
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> vehicles. With the advent of self-driving automobiles, this industry is experiencing a tremendous increase in investment potential.We offer data for the automotive sector, which is based on a complex network of structures that gather data from outside the vehicle.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Agriculture
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">Different digital technologies, including AI, are being adopted by farmers in various nations. Data is being collected from this industry
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak> for the purpose of training AI algorithm models to detect crops, identify traceability,  monitor the crops health etc in the harvesting processThe security precautions we take during the data production process ensure that the data we provide is always secure. Our process of production of data is secured and guaranteed that your data will stay protected at all times.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class="  text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Logistics
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">Large-scale data analysis and better logistics management are made possible by machine learning for logistics service providers. Globally,
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>
                                         businesses are quickly implementing this technology to enhance a variety of business workflows. With the aid of our top rated training data we can ensure a fully optimized and adequate algorithm for you.
                                     </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class="text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Sports
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">In this new generation's sports and gaming, AI is becoming an increasingly prevalent phenomena for the purpose of player tracking,
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>player segmentation, action identification, player position tracking etc. Thanks to AI, player performance analysis has advanced beyond all previous levels and it aids in boosting performance and health. By offering our highly qualified training data, we assist you in improving your AI model so that it dominates the sports industry.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                        Financial Services
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">AI is applied in finance to provide a solution that may change how we distribute credit and risk, leading to better, more competitive systems.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>We routinely gather vast amounts of data in the finance sector, including customer records, details on stock trading, investment trends etc and offer high-caliber data that is of the utmost importance for the algorithms that support AI automation processes and systems in order for them to fully function and remain optimized.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                <div class=" flex flex-col justify-center pb-5 ">
                                    <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl">
                                        Government
                                    </h1>
                                </div>
                                <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">By automating a variety of labor-intensive data processing and analysis processes, machine learning can enhance the government.
                                    <span x-show="open" @click.outside="open = false" x-transition x-cloak>As a result the efficiency and responsiveness of government operations will expand widely. Our devoted data gathering crews are well-connected with government organizations, various police forces, and local authorities that trust us to support and provide best security services for the data needs.
                                    </span>
                                </p>
                                <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                    <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                    <span class="px-2">
                                        <div
                                        class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 rotate-90"
                                            :class="{ '-rotate-90': open }">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                    </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                            Retail
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">In order to create a wonderful online shopping experience for customers, machine learning and AI are currently being used in the retail sector.
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> We offer high-quality training data sets for AI algorithms that can improve the retail sector, including data gathered from sales, barcodes, and other sources. With the aid of our top-notch training data, Dataways is here to assist you in developing and obtaining the optimization of your AI solutions for client delivery, search engine optimization, and more.
                                        </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl">
                                            Automation
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">The automotive sector has been completely transformed by artificial intelligence, which has accelerated the development of  autonomous
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> vehicles. With the advent of self-driving automobiles, this industry is experiencing a tremendous increase in investment potential.We offer data for the automotive sector, which is based on a complex network of structures that gather data from outside the vehicle.
                                        </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                            Agriculture
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">Different digital technologies, including AI, are being adopted by farmers in various nations. Data is being collected from this industry
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>
                                             for the purpose of training AI algorithm models to detect crops, identify traceability,  monitor the crops health etc in the harvesting processThe security precautions we take during the data production process ensure that the data we provide is always secure. Our process of production of data is secured and guaranteed that your data will stay protected at all times.
                                        </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl">
                                            Logistics
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">Large-scale data analysis and better logistics management are made possible by machine learning for logistics service  providers. Globally,
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>
                                             businesses are quickly implementing this technology to enhance a variety of business workflows. With the aid of our top rated training data we can ensure a fully optimized and adequate algorithm for you.
                                   </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class="text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                            Sports
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">In this new generation's sports and gaming, AI is becoming an increasingly prevalent phenomena for the purpose of player tracking,
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak>player segmentation, action identification, player position tracking etc. Thanks to AI, player performance analysis has advanced beyond all previous levels and it aids in boosting performance and health. By offering our highly qualified training data, we assist you in improving your AI model so that it dominates the sports industry.
                                        </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl ">
                                            Financial Services
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">AI is applied in finance to provide a solution that may change how we distribute credit and risk, leading to better, more competitive systems.
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> We routinely gather vast amounts of data in the finance sector, including customer records, details on stock trading, investment trends etc and offer high-caliber data that is of the utmost importance for the algorithms that support AI automation processes and systems in order for them to fully function and remain optimized.
                                        </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
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
                                    <div class=" flex flex-col justify-center pb-5 ">
                                        <h1 class=" text-dark-blue   font-bold   text-2xl 2xl:text-4xl">
                                            Government
                                        </h1>
                                    </div>
                                    <p class="  text-light-gray  text-justify 2xl:text-xl md:text-lg text-xl">By automating a variety of labor-intensive data processing and analysis processes, machine learning can enhance the  government.
                                        <span x-show="open" @click.outside="open = false" x-transition x-cloak> As a result the efficiency and responsiveness of government operations will expand widely. Our devoted data gathering crews are well-connected with government organizations, various police forces, and local authorities that trust us to support and provide best security services for the data needs.
                                        </span>
                                    </p>
                                    <div class="pt-3 flex justify-end text-dark-blue font-bold" x-on:click="open = ! open">
                                        <span x-text="open ? '{{ _('Read Less') }}' : '{{ _('Read More') }}'"></span>
                                        <span class="px-2">
                                            <div
                                            class="h-8 w-8 bg-white group-hover:bg-white   rounded-full flex items-center justify-center border ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 rotate-90"
                                                :class="{ '-rotate-90': open }">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <a x-on:click="open = ! open" class="flex justify-center pt-5">
                    <span x-text="open ? '{{ _('Less') }}' : '{{ _('More') }}'"  class="block md:hidden text-center text-white bg-light-gray p-1 px-5 rounded-3xl "
                    ></span>
                </a>
            </div>
            {{-- End mobileview our industry --}}
        </div>
    </section>
    {{-- End our industries --}}


</x-app-layout>
