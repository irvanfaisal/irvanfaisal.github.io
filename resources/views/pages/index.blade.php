@extends('layouts.master')
@section('content')
@include('layouts.header')
<main class="pt-20">
    <section class="bg-home text-center h-72 flex">
        <div class="md:w-4/5 mx-auto text-white my-auto">
            <h1 class="font-bold text-5xl uppercase" data-aos="fade-left" data-aos-duration="2000">Global Bumi Utama</h1>
            <p class="text-lg my-2" data-aos="fade-right" data-aos-duration="2000">Material Handling Equipment and Storage Rack</p>
            <br>
            <button class="px-4 py-2 bg-yellow-500 rounded hover:bg-yellow-400" data-aos="fade-down" data-aos-duration="2000">Our Products</button>
            <button class="px-4 py-2 border rounded ml-2 hover:bg-white hover:text-black" data-aos="fade-up" data-aos-duration="2000">About Us</button>
        </div>       
    </section>
    <section class="my-10 px-4">
        <div>
            <h2 class="font-bold text-2xl uppercase text-center" data-aos="fade-down" data-aos-offset="50" data-aos-duration="1000">Products</h2>
            <hr class="my-2 mx-auto w-1/5 border-blue-900 border-opacity-70" data-aos="fade-in" data-aos-offset="50" data-aos-duration="2000">
            <br>
            <br>
        </div>
        <div class="mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-1">
                <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000">
                    <img src="{{URL::asset('img/product-1.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                    <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-600 p-2 group-hover:bg-blue-500">
                        <p class="my-auto text-gray-100 text-sm">Trolley</p>
                    </div>
                </a>
                <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="500">
                    <img src="{{URL::asset('img/product-2.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                    <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-700 p-2 group-hover:bg-blue-600">
                        <p class="my-auto text-gray-100 text-sm">Hydraulic lift & Hydraulic Pallet</p>
                    </div>
                </a>
                <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1000">
                    <img src="{{URL::asset('img/product-3.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                    <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-800 p-2 group-hover:bg-blue-700">
                        <p class="my-auto text-gray-100 text-sm">Conveyor</p>
                    </div>
                </a>
                <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1500">
                    <img src="{{URL::asset('img/product-4.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                    <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-900 p-2 group-hover:bg-blue-800">
                        <p class="my-auto text-gray-100 text-sm">Storage Rack</p>
                    </div>
                </a>
            </div>
        </div>
    </section>    
    <section class="my-10 px-4">
        <div class="md:w-4/5 mx-auto">
            <h2 class="font-bold text-2xl uppercase text-center">Services</h2>
            <hr class="my-2 mx-auto w-1/5 border-blue-900 border-opacity-70">
            <br>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="my-2 flex flex-col items-center">
                    <div>
                        <img src="{{URL::asset('img/service-1.png')}}" class="max-h-12 mx-auto block">
                    </div>
                    <p class="mt-2 text-center">Best Product Quality</p>
                </div>
                <div class="my-2 flex flex-col items-center">
                    <div>
                        <img src="{{URL::asset('img/service-2.png')}}" class="max-h-12 mx-auto block">
                    </div>                    
                    <p class="mt-2 text-center">One Stop Solution</p>
                </div>
                <div class="my-2 flex flex-col items-center">
                    <div>
                        <img src="{{URL::asset('img/service-3.png')}}" class="max-h-12 mx-auto block">
                    </div>                    
                    <p class="mt-2 text-center">Ready Stock Products</p>
                </div>
                <div class="my-2 flex flex-col items-center">
                    <div>
                        <img src="{{URL::asset('img/service-4.png')}}" class="max-h-12 mx-auto block">
                    </div>                    
                    <p class="mt-2 text-center">On Time Delivery</p>
                </div>
                <div class="my-2 flex flex-col items-center">
                    <div>
                        <img src="{{URL::asset('img/service-5.png')}}" class="max-h-12 mx-auto block">
                    </div>
                    <p class="mt-2 text-center">Guaranteed Products</p>
                </div>
                <div class="my-2 flex flex-col items-center">
                    <div>
                        <img src="{{URL::asset('img/service-6.png')}}" class="max-h-12 mx-auto block">
                    </div>
                    <p class="mt-2 text-center">Responsive Customer Service</p>
                </div>                                                                                
            </div>
        </div>
    </section>
    <section class="my-10 bg-zinc-900 bg-opacity-90 px-4 py-10">
        <div class="md:w-3/5 mx-auto">
            <div class="text-center">
                <h2 class="font-bold text-2xl uppercase text-gray-100">About Us</h2>
                <br>
                <p class="text-gray-100">Global Bumi Utama (GBU) is a company engaged in the manufacture of Material Handling Equipment (MHE) and Storage Rack Products that was established in 2011.</p>
            </div>
        </div>
    </section> 

    <section id="customer" class="my-10 px-4">
        <div class="md:w-4/5 mx-auto">
            <h2 class="font-bold text-2xl uppercase text-center">Our Value Customers</h2>
            <hr class="my-2 mx-auto w-1/5 border-blue-900 border-opacity-70">
            <br>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-start">
                <div>
                    <p class="text-xl text-center">E-Commerce</p>
                    <hr class="w-3/5 mx-auto my-2">
                    <img src="{{URL::asset('img/customer-1.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                    <img src="{{URL::asset('img/customer-2.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                </div>
                <div>
                    <p class="text-xl text-center">Automotive</p>
                    <hr class="w-3/5 mx-auto my-2">
                    <img src="{{URL::asset('img/customer-6.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                    <img src="{{URL::asset('img/customer-7.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                </div>
                <div>
                    <p class="text-xl text-center">Logistic</p>
                    <hr class="w-3/5 mx-auto my-2">
                    <img src="{{URL::asset('img/customer-3.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                    <img src="{{URL::asset('img/customer-4.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                    <img src="{{URL::asset('img/customer-5.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                </div>
                <div>
                    <p class="text-xl text-center">Food & Beverage</p>
                    <hr class="w-3/5 mx-auto my-2">
                    <img src="{{URL::asset('img/customer-8.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                    <img src="{{URL::asset('img/customer-9.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                </div>
                <div>
                    <p class="text-xl text-center">Construction</p>
                    <hr class="w-3/5 mx-auto my-2">
                    <img src="{{URL::asset('img/customer-10.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                    <img src="{{URL::asset('img/customer-11.png')}}" style="max-height:60px;" class="mx-auto block my-5">
                </div>
            </div>
        </div>
    </section>   
</main>
@endsection

@section('js')

@endsection