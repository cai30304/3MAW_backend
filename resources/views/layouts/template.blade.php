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
    <header class="text-gray-600 body-font shadow bg-custom-purple fixed z-10 top-0 w-full">
        <div class="container mx-auto flex flex-wrap md:p-5 pt-2 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-0" href="/">
                <span class="ml-3 text-xl md:p-2 p-0 px-3">
                    <img class="h-10" src="/img/logo.png" alt="HMIT">
                </span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#AboutUs">
                    About 3Maw
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
    </header>

    <div style="padding-top:96px">
        @yield('content')
    </div>





    <footer class="text-white text-center sm:text-left body-font">
        <div class="bg-custom-purple">
            <div class="container mx-auto py-4 px-5">
                <p class="font-bold leading-loose text-lg  ">SAN MAW RUBBER INDUSTRIAL CO., LTD.</p>
                <p class="font-bold leading-loose text-lg">Tel: +886-4-7708736 　+886-4-7707597 Fax: +886-4-7706214</p>
                <p class="font-bold leading-loose text-sm">No.10, Dong Shi Lane, Ting Nian Village,Fuxing Township,Changhua County 506, Taiwan</p>
                <p class="font-bold leading-loose text-sm">E-mail: v823@ms25.hinet.net</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    @yield('js')
</body>
</html>
