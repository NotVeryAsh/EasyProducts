@extends('layouts.app')
@section('content')
    <!-- Hero banner -->
    <div
        class="bg-white relative px-6 pt-14 lg:px-8 bg-no-repeat bg-cover drop-shadow-sm" @style(["background-image: url('images/home/hero.jpg')"])>
        <div class="mx-auto max-w-md py-40">
            <div class="text-center bg-primary p-10 rounded-xl shadow-2xl">
                <h1 class="text-4xl font-bold text-neutral-50 sm:text-5xl">Deliciously Healthy</h1>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                       class="shadow-xl rounded-md bg-neutral-50 px-3.5 py-2.5 text-sm font-semibold hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Order
                        Yours</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <h1 class="mt-12 text-center font-semibold text-4xl">Products</h1>
    <div class="mt-12 flex flex-row w-9/12 mx-auto">
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/smoothie.jpg') }}"
                     alt="Smoothie">
                <p class="font-semibold">Smoothies</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/milkshake.jpg') }}"
                     alt="Milshake">
                <p class="font-semibold">Milkshakes</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/ice_cream.jpg') }}"
                     alt="Ice Cream">
                <p class="font-semibold">Ice Cream</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/doggie_ice_cream.jpg') }}"
                     alt="Ice Cream">
                <p class="font-semibold">Doggie Ice Cream</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/drinks.jpg') }}"
                     alt="Drinks">
                <p class="font-semibold">Drinks</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/waffle_pops.jpg') }}"
                     alt="Waffle Pops">
                <p class="font-semibold">Waffle Pops</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/cakes.jpg') }}"
                     alt="Waffle Pops">
                <p class="font-semibold">Cakes</p>
            </a>
        </div>
        <div class="w-full text-center">
            <a href="" class="space-y-3">
                <img class="object-cover ring-2 ring-primary rounded-md w-24 h-24 mx-auto"
                     src="{{ \App\Services\ImageService::getPublicImage('home/product_thumbnails/protein_porridge.jpg') }}"
                     alt="Protein Porridge">
                <p class="font-semibold">Protein Porridge</p>
            </a>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br><br><br>

@stop
