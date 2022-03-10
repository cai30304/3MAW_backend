<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $seo = App\Seo::find(1); ?>
    <meta name="keywords" content="{{$seo->keyword}}">
    <meta name="description" content="{{$seo->description}}" />
    <title>{{$seo->title}}</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-GXF49ZEXBX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GXF49ZEXBX');
    </script>

    @yield('recaptcha') -->


    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.css" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background: url('/src/imgs/bg.png');
        }

        .swiper-button-next:after,
        .swiper-container-rtl .swiper-button-prev:after,
        .swiper-button-prev:after,
        .swiper-container-rtl .swiper-button-next:after {
            content: "";
        }

        .bg-custom-purple {
            --tw-text-opacity: 1 !important;
            background-color: rgba(175, 65, 132, var(--tw-text-opacity)) !important;
        }

        .text-custom-purple {
            --tw-text-opacity: 1 !important;
            color: rgba(175, 65, 132, var(--tw-text-opacity)) !important;
        }
    </style>

    @yield('css')
</head>

<body>
    {{-- <header class="text-gray-600 body-font shadow bg-custom-purple fixed z-10 top-0 w-full">
        <div class="container mx-auto flex flex-wrap md:p-5 pt-2 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-0" href="/">
                <span class="ml-3 text-xl md:p-2 p-0 px-3">
                    <!-- <img class="h-10" src="/img/logo.png" alt="Logo"> -->
                    Logo
                </span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#AboutUs">
                    About Us
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#Products">
                    Products
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#News">
                    News
                </a>
                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#ContactUs">
                    Contact Us
                </a>
            </nav>

        </div>
    </header> --}}

    <header x-data="{ mobileMenuOpen : false }" class="text-gray-600 body-font shadow bg-custom-purple fixed z-10 top-0 w-full">
        <div class="container mx-auto flex flex-wrap p-5 justify-between items-center">
            <a class="flex items-center mb-0" href="/">
                <span class="ml-3 text-xl p-2 px-3 flex text-white items-end font-bold">
                    <img class="h-10" src="/img/short_logo.png" alt="Logo">
                    東家五金有限公司
                </span>
            </a>
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block md:hidden w-12 h-12 p-1"><svg fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg></button>
            <nav class="md:ml-auto md:flex flex-col md:flex-row w-full md:w-auto items-center text-base justify-center"
             @click.away="mobileMenuOpen = false" :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}">
                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#AboutUs">
                    About Us
                </a>

                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#Products">
                    Products
                </a>

                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#News">
                    News
                </a>
                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#ContactUs">
                    Contact Us
                </a>
            </nav>
        </div>
    </header>


    <div style="padding-top:96px">
        @yield('content')
    </div>





    <footer class="text-white text-center sm:text-left body-font">
        <div class="bg-custom-purple">
            <div class="container mx-auto py-4 px-5">
                <p class="font-bold leading-loose text-lg  ">
                    U-HOUSE HARDWARE INDUSTRY CO., LTD. <br/>
                    YO CHENG HARDWARE CO.
                </p>
                <p class="font-bold leading-loose text-lg">Tel:+886-4-7363879 | Fax:+886-4-7367352
                    </p>
                <p class="font-bold leading-loose text-sm">Address: No.206, Kedong Rd., Hemei Township,
                    Changhua County 508, Taiwan
                    </p>
                <p class="font-bold leading-loose text-sm">E-mail: yocheng168@gmail.com</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    @yield('js')
</body>
</html>
