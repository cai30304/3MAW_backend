@extends('layouts.template')

@section('css')
@endsection

@section('content')
<main>
    <section class="text-gray-600 body-font min-h-screen">
        <div class="container px-5 pt-20 pb-10 mx-auto">
            <div class="flex flex-wrap w-full mb-10">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-gray-900 text-custom-purple">{{$product_type->type_name_en}}</h1>
                    <div class="h-1 w-20 bg-custom-purple rounded"></div>
                </div>
            </div>
            <section class="text-black body-font">
                <div class="container mx-auto">
                    @foreach($products as $product)
                    <div class="flex px-5 md:flex-row flex-col items-center">
                        <div class="sm:w-1/2 w-full">
                            <img class="object-cover object-center rounded" alt="hero" src="{{$product->img ?? '/img/bg.png'}}">
                            <h2 class="text-center font-bold text-2xl pt-3">{{$product->name_ch}}</h2>
                        </div>
                        <div
                            class="flex-grow lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
<pre class="text-xl leading-relaxed" style="white-space: break-spaces;word-break: break-all;">
{{$product->content_ch}}
</pre>
                        </div>

                    </div>
                    <div class="h-1 w-full bg-gray-200 my-12 rounded"></div>
                    @endforeach
                </div>

            </section>
        </div>
    </section>

</main>
@endsection

@section('js')
@endsection
