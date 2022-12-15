<x-app-layout>
    {{-- Hero section --}}
    <section>
        <div id="home"
            class="h-[20rem] xl:h-screen md:h-[35rem] bg-cover flex md:justify-center xl:justify-start items-center mb-10 md:mb-20"
            style="background-image: url({{ asset('images/service/home.png') }})">
            <div class="text-2xl md:text-6xl xl:text-8xl font-bold container mx-auto pl-5 sm:pl-0">
                <h2 class="text-sky-blue md:text-center xl:text-left">We Provide</h2>
                <h2 class="text-white md:text-center xl:text-left">the Data You Need</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto pb-10 md:pb-20">
            <div class="text-white text-justify px-5 md:px-0 md:text-2xl md:text-center xl:text-3xl">
                To guarantee that your project is successful at every phase, Dataways offers
                solutions for each stage of AI or ML training that are available in a variety
                of languages in the formats of images, audio, video, text, and 3D point clouds.
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="relative">
        <div class="absolute w-[20rem] -left-40 hidden xl:block -translate-y-20 fill-light-salt">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 526.569 494.331">
                <path id="Path_87" data-name="Path 87" d="M31.335,20.838c90.317-78.787,140.28,84.553,217.146,92.239s203.694-88.4,261.344,28.825-94.814,122.393-160.15,210.862-105.037,144.642-181.9,140.8-115.3-74.944-115.3-186.4S-58.982,99.625,31.335,20.838Z" transform="translate(3.974 0.583)" opacity="0.5"/>
              </svg>
        </div>
        <div class="absolute w-[25rem] right-0 hidden xl:block -translate-y-40 fill-light-salt opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 526.569 494.331">
                <path id="Path_87" data-name="Path 87" d="M31.335,20.838c90.317-78.787,140.28,84.553,217.146,92.239s203.694-88.4,261.344,28.825-94.814,122.393-160.15,210.862-105.037,144.642-181.9,140.8-115.3-74.944-115.3-186.4S-58.982,99.625,31.335,20.838Z" transform="translate(3.974 0.583)" opacity="0.5"/>
              </svg>
        </div>
        <div class="container mx-auto pb-10 md:pb-20" id="services">
            <div class="text-white text-2xl font-semibold text-center md:text-3xl xl:text-5xl relative">
                <h2
                    class="before:absolute before:h-[1px] before:w-16 before:xl:w-24 before:bg-white before:-bottom-1 before:translate-x-3.5 before:md:translate-x-6 before:xl:translate-x-10">
                    Services</h2>
            </div>
        </div>
    </section>


    {{-- Services Tab --}}
    <section>
        <div class="container mx-auto pb-10 md:pb-20" x-data="{ tab: '#tab1' }" x-cloak>

            {{-- Carousel --}}
            <div class="swiper mySwiper px-10 w-[21rem] sm:w-full 2xl:w-[83rem]">
                <div class="swiper-wrapper">

                    {{-- Image --}}
                    <div class="swiper-slide">
                        <div x-on:click.prevent="tab='#tab1'"
                            class="border-4 border-light-salt  rounded-[60px] px-10 py-5 w-[16rem] sm:w-[18rem] flex-col flex justify-center items-center"
                            :class="{ ' bg-light-salt ': tab === '#tab1' }">
                            <div class="pb-5">
                                <img src="{{ asset('images/service/IMAGE&ICON/IMAGE.svg') }}" alt="">
                            </div>
                            <h2 class="text-sky-blue text-2xl sm:text-4xl pb-2">Image</h2>
                            <h2 class="text-xl sm:text-3xl text-white">data collection</h2>
                        </div>
                    </div>

                    {{-- Video --}}
                    <div class="swiper-slide">
                        <div x-on:click.prevent="tab='#tab2'"
                            class="border-4 border-light-salt rounded-[60px] px-10 py-5 w-[16rem] sm:w-[18rem] flex-col flex justify-center items-center"
                            :class="{ ' bg-light-salt  ': tab === '#tab2' }">
                            <div class="pb-5">
                                <img src="{{ asset('images/service/IMAGE&ICON/VIDEO.svg') }}" alt="">
                            </div>
                            <h2 class="text-sky-blue text-2xl sm:text-4xl pb-2">Video</h2>
                            <h2 class="text-xl sm:text-3xl text-white">data collection</h2>
                        </div>
                    </div>

                    {{-- Audio --}}
                    <div class="swiper-slide">
                        <div x-on:click.prevent="tab='#tab3'"
                            class="border-4 border-light-salt rounded-[60px] px-10 py-5 w-[16rem] sm:w-[18rem] flex-col flex justify-center items-center"
                            :class="{ ' bg-light-salt  ': tab === '#tab3' }">
                            <div class="pb-5">
                                <img src="{{ asset('images/service/IMAGE&ICON/AUDIO.svg') }}" alt="">
                            </div>
                            <h2 class="text-sky-blue text-2xl sm:text-4xl pb-2">Audio</h2>
                            <h2 class="text-xl sm:text-3xl text-white">data collection</h2>
                        </div>
                    </div>

                    {{-- Text --}}
                    <div class="swiper-slide">
                        <div x-on:click.prevent="tab='#tab4'"
                            class="border-4 border-light-salt rounded-[60px] px-10 py-5 w-[16rem] sm:w-[18rem] flex-col flex justify-center items-center"
                            :class="{ ' bg-light-salt  ': tab === '#tab4' }">
                            <div class="pb-5">
                                <img src="{{ asset('images/service/IMAGE&ICON/TEXT.svg') }}" alt="">
                            </div>
                            <h2 class="text-sky-blue text-2xl sm:text-4xl pb-2">Text</h2>
                            <h2 class="text-xl sm:text-3xl text-white">data collection</h2>
                        </div>
                    </div>

                    {{-- 3D Point Cloud --}}
                    <div class="swiper-slide">
                        <div x-on:click.prevent="tab='#tab5'"
                            class="border-4 border-light-salt rounded-[60px] px-10 py-5 w-[16rem] sm:w-[18rem] flex-col flex justify-center items-center"
                            :class="{ ' bg-light-salt  ': tab === '#tab5' }">
                            <div class="pb-5">
                                <img src="{{ asset('images/service/IMAGE&ICON/3D POINT CLOUD.svg') }}" alt="">
                            </div>
                            <h2 class="text-sky-blue text-2xl sm:text-4xl pb-2">3D</h2>
                            <h2 class="text-xl sm:text-3xl text-white">Point Cloud</h2>
                        </div>
                    </div>

                    {{-- Other services --}}
                    <div class="swiper-slide">
                        <div x-on:click.prevent="tab='#tab6'"
                            class="border-4 border-light-salt rounded-[60px] px-10 py-5 w-[16rem] sm:w-[18rem] flex-col flex justify-center items-center"
                            :class="{ ' bg-light-salt  ': tab === '#tab6' }">
                            <div class="pb-5">
                                <img src="{{ asset('images/service/IMAGE&ICON/OTHER.svg') }}" alt="">
                            </div>
                            <h2 class="text-sky-blue text-2xl sm:text-4xl pb-2">Other</h2>
                            <h2 class="text-xl sm:text-3xl text-white">services</h2>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            {{-- Tab Content --}}

            <div class="pt-10 md:pt-20 px-5 md:px-20">
                {{-- Image --}}
                <div class="" x-show.transition.in="tab === '#tab1'">
                    <div class="bg-light-salt w-full px-5 md:px-10 xl:py-10 rounded-[31px] relative">
                        <div class="absolute w-56 left-0 hidden xl:block">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE DESKTOP.png') }}" alt="">
                        </div>
                        <div class="w-full  justify-center hidden md:flex xl:hidden">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE IPAD.png') }}" alt="">
                        </div>

                        <div class="w-full flex justify-center md:hidden py-5">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE MOBILE.png') }}" alt="">
                        </div>

                        <div class=" md:text-3xl xl:text-5xl text-center xl:px-10 xl:pl-52 font-semibold relative text-sky-blue xl:text-black">
                            <h2 class="before:absolute before:h-[1px] before:w-20 before:md:w-48 before:bg-sky-blue before:-bottom-3 before:translate-x-10 before:xl:translate-x-0">Image data <span class="text-sky-blue">collection</span> </h2>
                        </div>
                        <div class="py-10 xl:px-10 xl:pl-52 text-justify md:text-2xl text-white">
                            <p>
                                Depending on the issue the AI model is trying to solve, the type of data used will fluctuate. In order to forecast outcomes
                                for tasks like image segmentation, object detection, and classification, AI models are trained on image datasets. With our
                                image data collection services we gather and classify the most comprehensive image datasets and deep learning image data in
                                the formats of png, jpg, jpeg, GIF, TIF etc, to train computer vision models by our wide variety of image classification datasets.
                                We offer DICOM formatted data in addition to the standard datasets, something that many other data collection firms do not.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Video --}}
                <div class="" x-show.transition.in="tab === '#tab2'">
                    <div class="bg-light-salt w-full px-5 md:px-10 xl:py-10 rounded-[31px] relative">
                        <div class="absolute w-56 left-0 hidden xl:block">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE DESKTOP.png') }}" alt="">
                        </div>
                        <div class="w-full  justify-center hidden md:flex xl:hidden">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE IPAD.png') }}" alt="">
                        </div>

                        <div class="w-full flex justify-center md:hidden py-5">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE MOBILE.png') }}" alt="">
                        </div>

                        <div class=" md:text-3xl xl:text-5xl text-center xl:px-10 xl:pl-52 font-semibold relative text-sky-blue xl:text-black">
                            <h2 class="before:absolute before:h-[1px] before:w-20 before:md:w-48 before:bg-sky-blue before:-bottom-3 before:translate-x-10 before:xl:translate-x-0">Video data <span class="text-sky-blue">collection</span> </h2>
                        </div>
                        <div class="py-10 xl:px-10 xl:pl-52 text-justify md:text-2xl text-white">
                            <p>
                                The purpose of video training data for machine learning models is to facilitate object recognition of images
                                 that are in motion by AI-powered algorithms. We gather and categorize unique video data sets such as CCTV videos,
                                traffic videos, human action videos etc, according to your requirements for helping the AI models to perceive and
                                comprehend their surroundings. For the effective training and development of algorithms they require high quality
                                video datasets that are very diverse and available in massive quantities. With the most recent pre-built data gathering
                                tools, our devoted crew is equipped to collect video datasets in mp4, m4a, avi, and other formats at any moment.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Audio --}}
                <div class="" x-show.transition.in="tab === '#tab3'">
                    <div class="bg-light-salt w-full px-5 md:px-10 xl:py-10 rounded-[31px] relative">
                        <div class="absolute w-56 left-0 hidden xl:block">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE DESKTOP.png') }}" alt="">
                        </div>
                        <div class="w-full  justify-center hidden md:flex xl:hidden">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE IPAD.png') }}" alt="">
                        </div>

                        <div class="w-full flex justify-center md:hidden py-5">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE MOBILE.png') }}" alt="">
                        </div>

                        <div class=" md:text-3xl xl:text-5xl text-center xl:px-10 xl:pl-52 font-semibold relative text-sky-blue xl:text-black">
                            <h2 class="before:absolute before:h-[1px] before:w-20 before:md:w-48 before:bg-sky-blue before:-bottom-3 before:translate-x-10 before:xl:translate-x-0">Audio data <span class="text-sky-blue">collection</span> </h2>
                        </div>
                        <div class="py-10 xl:px-10 xl:pl-52 text-justify md:text-2xl text-white">
                            <p>
                                To enhance the machine learning algorithms effectively they need big and top rated datasets,
                                not just any kind of data will suffice for these requirements of a particular task. Having a
                                unique language package is difficult because as we all know there are so many different languages
                                spoken in the actual world. We provide all types of audio datasets in  the format of mp3 to power
                                your AI models in any speech, language, or voice function that you require. For your NLP projects
                                in any language of your choice, we gather audio data since we are ever-expanding and carefully collecting data.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Text --}}
                <div class="" x-show.transition.in="tab === '#tab4'">
                    <div class="bg-light-salt w-full px-5 md:px-10 xl:py-10 rounded-[31px] relative">
                        <div class="absolute w-56 left-0 hidden xl:block">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE DESKTOP.png') }}" alt="">
                        </div>
                        <div class="w-full  justify-center hidden md:flex xl:hidden">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE IPAD.png') }}" alt="">
                        </div>

                        <div class="w-full flex justify-center md:hidden py-5">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE MOBILE.png') }}" alt="">
                        </div>

                        <div class=" md:text-3xl xl:text-5xl text-center xl:px-10 xl:pl-52 font-semibold relative text-sky-blue xl:text-black">
                            <h2 class="before:absolute before:h-[1px] before:w-20 before:md:w-48 before:bg-sky-blue before:-bottom-3 before:translate-x-10 before:xl:translate-x-0">Text data <span class="text-sky-blue">collection</span> </h2>
                        </div>
                        <div class="py-10 xl:px-10 xl:pl-52 text-justify md:text-2xl text-white">
                            <p>
                                We gather and categorize various types of text data in order to increase the performance of
                                machine learning models used for natural language processing of unstructured texts found in
                                documents and databases including pdf, invoices, prescriptions, hand written notes, menus,
                                chatbots, receipts and more. We offer a broad range of text data collection services for deep
                                learning and machine learning applications of all kinds. With the aid of our specialized tools
                                and our language specialists, who can gather high-quality training data from several unique
                                sources and provide it to you in accordance with your requirements in text analyses.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 3D Point Cloud --}}
                <div class="" x-show.transition.in="tab === '#tab5'">
                    <div class="bg-light-salt w-full px-5 md:px-10 xl:py-10 rounded-[31px] relative">
                        <div class="absolute w-56 left-0 hidden xl:block">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE DESKTOP.png') }}" alt="">
                        </div>
                        <div class="w-full  justify-center hidden md:flex xl:hidden">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE IPAD.png') }}" alt="">
                        </div>

                        <div class="w-full flex justify-center md:hidden py-5">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE MOBILE.png') }}" alt="">
                        </div>

                        <div class=" md:text-3xl xl:text-5xl text-center xl:px-10 xl:pl-52 font-semibold relative text-sky-blue xl:text-black">
                            <h2 class="before:absolute before:h-[1px] before:w-20 before:md:w-48 before:bg-sky-blue before:-bottom-3 before:translate-x-10 before:xl:translate-x-0">Video data <span class="text-sky-blue">collection</span> </h2>
                        </div>
                        <div class="py-10 xl:px-10 xl:pl-52 text-justify md:text-2xl text-white">
                            <p>
                                For the effective training of a driverless car, AI systems need 3D point cloud data
                                for precise detection through lidar sensors with 3D boxes. Only high resolution 3D data,
                                which we promise to provide for a fair price and extreme quality, can help the lidar sensors
                                in autonomous systems work better. With the help of our prebuilt cutting-edge data collection
                                systems, our highly talented team is capable of collecting data from lidar technologies.
                                We follow a systematic procedure for the purpose of completing a work consisting of
                                gathering and analyzing the existing data and collecting new data according to the requirement by the client.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Other services --}}
                <div class="" x-show.transition.in="tab === '#tab6'">
                    <div class="bg-light-salt w-full px-5 md:px-10 xl:py-10 rounded-[31px] relative">
                        <div class="absolute w-56 left-0 hidden xl:block">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE DESKTOP.png') }}" alt="">
                        </div>
                        <div class="w-full  justify-center hidden md:flex xl:hidden">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE IPAD.png') }}" alt="">
                        </div>

                        <div class="w-full flex justify-center md:hidden py-5">
                            <img src="{{ asset('images/service/IMAGE&ICON/SERVICE MOBILE.png') }}" alt="">
                        </div>

                        <div class=" md:text-3xl xl:text-5xl text-center xl:px-10 xl:pl-52 font-semibold relative text-sky-blue xl:text-black">
                            <h2 class="before:absolute before:h-[1px] before:w-20 before:md:w-48 before:bg-sky-blue before:-bottom-3 before:translate-x-10 before:xl:translate-x-0">Video data <span class="text-sky-blue">collection</span> </h2>
                        </div>
                        <div class="py-10 xl:px-10 xl:pl-52 text-justify md:text-2xl text-white">
                            <p>
                                <a href="https://infolks.info/" class="text-sky-blue" target="_blank">Infolks</a> and <a href="https://medfolks.ai/" class="text-sky-blue" target="_blank">Medfolks</a>
                                two of our sister concerns from Infolks group  which provide top rated data labeling for AI powered solutions globally. If you require data
                                labeling services in addition to data collection, our Infolks and Medfolks can help with our 2 Bn+ labeling experience. As an experienced data
                                labeling company with 600+ employees, Infolks provides services in a wide range of industries, such as autonomous,
                                human attribution, agriculture, healthcare, logistics, retail, sports, and others. Medfolks is an exclusive platform
                                for all sorts of medical data labeling consisting of expert medical practitioners and labeling professionals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @section('scripts')
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 80,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                breakpoints: {
                    700: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        slidesPerGroup: 1,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                        slidesPerGroup: 1,
                    },

                    1290: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        slidesPerGroup: 1,
                    }
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    @endsection
</x-app-layout>
