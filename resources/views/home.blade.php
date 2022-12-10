<x-app-layout>
 {{-- Title --}}
 <x-slot name="title">gallery</x-slot>


    {{-- Hero Section --}}
    <section class="bg-light-blue">


        <div id="home"
            class="grid grid-cols-2  lg:grid-cols-2 xl:pt-20  lg:h-screen  container mx-auto">
        <div class=" flex flex-col justify-center border-4 border-white rounded-[282px] xl:h-[500px] xl:w-[400px]">
            <div class="border-8 border-white rounded-[282px] xl:h-[450px] xl:w-[350px] bg-cover" style="background-image: url({{ asset('images/home/Image40.png') }})">
            </div>
        </div>
            <div class=" p-10 order-last lg:order-first flex flex-col justify-center w-full  h-full pt-10 md:pt-0   ">
                <h1
                    class="text-4xl md:text-6xl 2xl:text-7xl  font-bold text-white text-left md:py-4 ">
                    THE WAY TO </h1>
                    <h1
                    class="text-4xl md:text-6xl 2xl:text-7xl  font-bold text-sky-blue text-left ">
                   INFINITE THINKING</h1>
                   <p class="text-white text-lg  md:text-xl ">An AI Data Collection Platform From Infolks Group</p>
            </div>

        </div>
    </section>
</x-app-layout>
