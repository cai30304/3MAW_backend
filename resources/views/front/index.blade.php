@extends('layouts.template')

@section('recaptcha')
    {{-- google recaptcha v3 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('css')
    <style>


    </style>
@endsection

@section('content')
    <main>
        <!-- Recommend supplier -->
        <section>
            <div class="swiper-container bannerSwiper">
                <div class="swiper-wrapper">
                    @foreach ($indexData['banners'] as $banner)
                        <div class="swiper-slide">
                            @if ($banner->links)
                                <a href="{{ $banner->links }}" target="_blank">
                                    <img src="{{ $banner->img }}" alt="{{ $banner->alt }}">
                                </a>
                            @else
                                <img src="{{ $banner->img }}" alt="{{ $banner->alt }}">
                            @endif
                        </div>
                    @endforeach
                </div>
                <div
                    class="swiper-button-next right-5 bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div
                    class="swiper-button-prev left-10 bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="body-font" id="AboutUs">
            <div class="container px-5 md:py-24 py-10 mx-auto flex flex-wrap">
                <div class="flex flex-wrap w-full">
                    <div class="lg:w-1/3 md:w-1/2 object-cover object-center rounded-lg">
                        <div class="flex flex-wrap w-full mb-10">
                            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-custom-purple">About Us</h1>
                                <div class="h-1 w-20 bg-custom-purple rounded"></div>
                            </div>
                        </div>
                        <img src="/img/about_us.jpg" alt="About Us">
                    </div>
                    <div class="lg:w-2/3 md:w-1/2 md:pl-10 md:py-6 font-bold text-black leading-loose md:pt-0 pt-10">
                        專業製造商-東家五金有限公司前身為鋅、鋁合金壓鑄"佑晟五金"，成立於西元1990年，在鋅、鋁合金壓鑄的領域中，佔有重要的地位。精湛的技術加上品質至上的品管，讓鋅、鋁合金壓鑄產品更加有競爭力。<br/>
                        鋅、鋁合金壓鑄的產品應用很廣，如汽機車零件、工具零件、門把、掛勾、衛浴配件、螺絲、螺帽.......等等，不勝枚舉。<br/>
                        應付國際市場的多變化，投入後段加工服務，如CNC加工、拋光、組裝....等，歡迎OEM,ODM合作。<br/>
                        <br/>
                        Professional manufacturer – U-HOUSE HARDWARE INDUSTRY CO. LTD., formerly known as zinc and aluminum
                        alloy die-casting "YO CHENG HARDWARE CO.", was established in 1990 and occupies an important
                        position in the field of zinc and aluminum alloy die-casting. Exquisite technology and
                        quality-oriented quality control make zinc and aluminum alloy die-casting products more competitive.<br/>
                        Zinc and aluminum alloy die-casting products are widely used, such as automobile and motorcycle
                        parts, tool parts, door handles, hooks, bathroom accessories, screws, nuts, etc. The list goes on
                        and on.<br/>
                        To cope with the changes in the international market, we invest in post-processing services, such as
                        CNC machining, polishing, assembly, etc. OEM and ODM cooperation are welcome.
                    </div>
                </div>
            </div>
        </section>

        <!-- APPLICATIONS -->
        <section class="text-gray-600 body-font bg-custom-purple" id="Classification">
            <div class="container px-5 pt-20 pb-20 mx-auto text-white">
                <div class="flex flex-wrap w-full mb-10">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2">APPLICATIONS</h1>
                        <div class="h-1 w-20 bg-white rounded"></div>
                    </div>
                </div>
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/4 md:w-1/2 w-full text-white">
                        <div class="h-full text-center p-4 rounded-lg transform duration-300 hover:scale-105">
                            <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                                src="/img/applications/car.jpg" alt="Car">
                            <div class="flex-grow">
                                <h2 class="text-xl font-bold">Car</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 lg:w-1/4 md:w-1/2 w-full text-white">
                        <div class="h-full text-center p-4 rounded-lg transform duration-300 hover:scale-105">
                            <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                                src="/img/applications/building.jpg" alt="Building">
                            <div class="flex-grow">
                                <h2 class="text-xl font-bold">Building</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 lg:w-1/4 md:w-1/2 w-full text-white">
                        <div class="h-full text-center p-4 rounded-lg transform duration-300 hover:scale-105">
                            <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                                src="/img/applications/screw.jpg" alt="Screw">
                            <div class="flex-grow">
                                <h2 class="text-xl font-bold">Screw</h2>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 lg:w-1/4 md:w-1/2 w-full text-white">
                        <div class="h-full text-center p-4 rounded-lg transform duration-300 hover:scale-105">
                            <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                                src="/img/applications/tool.jpg" alt="Tool">
                            <div class="flex-grow">
                                <h2 class="text-xl font-bold">Tool</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-white body-font mt-20 bg-cover" id="News"
            style="background-image:url(/img/news_background.jpg)">
            <div class="container px-5 py-20 mx-auto">
                <div class="flex flex-wrap w-full mb-10">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-white">News</h1>
                        <div class="h-1 w-20 bg-white rounded"></div>
                    </div>
                </div>
                <div class="-mx-4 -my-8">
                    @foreach ($indexData['all_news'] as $news)
                        <div class="py-8 px-4">
                            <div class="h-full flex items-start">
                                <div class="flex-grow pl-6 flex md:flex-row flex-col items-center">
                                    <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                                        src="{{ $news->img }}" alt="News">
                                    <a href="/news/{{ $news->id }}"
                                        class="flex items-center md:flex-row flex-col hover:underline">
                                        <p class="title-font text-2xl font-bold leading-relaxed mx-5">{{ $news->date }}
                                        </p>
                                        <h2 class="title-font text-2xl font-bold my-3">{{ $news->title_ch }}
                                        </h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="body-font" id="Products">
            <div class="container px-5 md:py-24 py-10 mx-auto flex flex-wrap">
                <div class="flex flex-wrap w-full mb-10">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-custom-purple">Products</h1>
                        <div class="h-1 w-20 bg-custom-purple rounded"></div>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    @foreach ($indexData['productTypes'] as $types)
                        <div class="p-4 lg:w-1/4 md:w-1/2 w-full">
                            <a class="py-3 text-black text-center block transform duration-300 hover:scale-105 shadow"
                                href="/Products/{{ $types->id }}">
                                <img class="rounded-full object-cover object-center inline-block w-56 h-56"
                                    src="{{ $types->img ?? '/img/bg.png' }}" alt="{{ $types->type_name_en }}">
                                <div class="text-lg font-bold pt-3">{{ $types->type_name_en }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="text-white body-font relative">
            <div class="absolute inset-0 bg-bottom bg-no-repeat" style="background-image:url('/img/contact_us.jpg')">
            </div>
            <div class="container px-5 py-32 mx-auto flex" id="ContactUs">
                <div
                    class="w-full bg-black bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative shadow-md">
                    <div class="flex flex-wrap w-full mb-10">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-white">Contact Us</h1>
                            <div class="h-1 w-20 bg-white rounded"></div>
                        </div>
                    </div>

                    <form action="/contact_us" method="post">
                        @csrf
                        <div class="flex flex-col md:flex-row md:space-x-4">
                            <div class="flex-1">
                                <div class="relative mb-4">
                                    <label for="companyName" class="leading-7 text-sm text-white">Company</label>
                                    <input type="text" id="companyName" name="companyName" required
                                        class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('companyName')
                                        <span class="text-red-200" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="relative mb-4">
                                    <label for="country" class="leading-7 text-sm text-white">Country</label>
                                    <input type="text" id="country" name="country" required
                                        class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="companyWebsite" class="leading-7 text-sm text-white">Website</label>
                                    <input type="text" id="companyWebsite" name="companyWebsite" required
                                        class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('companyWebsite')
                                        <span class="text-red-200" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="relative mb-4">
                                    <label for="business" class="leading-7 text-sm text-white">Business</label>
                                    <input type="text" id="business" name="business" required
                                        class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('business')
                                        <span class="text-red-200" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="flex-1">
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-white">Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                                    @error('email')
                                        <span class="text-red-200" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="relative mb-4">
                                    <label for="message" class="leading-7 text-sm text-white">Message</label>
                                    <textarea id="message" name="content"
                                        class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-white py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                </div>
                                <button
                                    class="text-white block w-full bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                    type="submit">Send</button>
                            </div>
                        </div>



                        <!-- {!! app('captcha')->render() !!} -->

                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        var swiper = new Swiper(".bannerSwiper", {
            autoplay: {
                delay: 5000,
            },
            spaceBetween: 30,
            navigation: {
                nextEl: ".bannerSwiper .swiper-button-next",
                prevEl: ".bannerSwiper .swiper-button-prev",
            },
            pagination: {
                el: ".bannerSwiper .swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".recommendSupplierSwiper", {
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 4,
            pagination: {
                el: ".recommendSupplierSwiper .swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".productsVideosSwiper", {
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 3,
            pagination: {
                el: ".productsVideosSwiper .swiper-pagination",
                clickable: true,
            },
        });
    </script>

    @if (Session::has('message'))
        <script>
            alert('We will contact you in a few days, thank you for contacting us!')
        </script>
    @endif
@endsection
