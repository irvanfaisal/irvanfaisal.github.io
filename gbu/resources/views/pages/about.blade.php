@extends('layouts.master')
@section('content')
@include('layouts.header')
<main class="pt-20">
    <section class="bg-home text-center h-36 flex">
        <div class="md:w-4/5 mx-auto text-white my-auto">
            <h1 class="font-bold text-5xl uppercase" data-aos="fade-left" data-aos-duration="2000">About Us</h1>
        </div>       
    </section>
    <section class="my-10 px-4">
        <div class="md:w-4/5 mx-auto my-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h2 class="font-bold text-2xl uppercase" data-aos="fade-down" data-aos-offset="50" data-aos-duration="1000">Who We Are</h2>
                    <hr class="my-2 w-2/5 border-blue-900 border-opacity-70" data-aos="fade-in" data-aos-offset="50" data-aos-duration="2000">
                    <div>
                        <p class="text-sm">Global Bumi Utama (GBU) adalah perusahaan yang bergerak dibidang pembuatan Produk Material Handling Equipment (MHE) and Storage Rack yang berdiri sejak 2011.</p>
                        <br>
                        <p class="text-sm font-bold">Visi:</p>
                        <p class="text-sm">Menjadi perusahaan yang terdepan dengan kontribusi signifikan dalam pengembangan dan pembuatan produk Material Handling Equipment (MHE) dan Storage Rack.</p>
                        <br>
                        <p class="text-sm font-bold">Misi</p>
                        <ul class="text-sm ml-4">
                            <li>
                                Menjadi mitra yang memberikan solusi terbaik terhadap masalah pelanggan
                            </li>
                            <li>
                                Secara konsisten memberikan pelayanan terbaik kepada pelanggan
                            </li>
                            <li>
                                Melakukan perbaikan secara berkelanjutan terhadap kualitas produk dan layanan.
                            </li>
                            <li>
                                Membuat produk dengan mempertimbangkan untuk meningkatkan produktivitas dan keamanan pelanggan. 
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/pVE92TNDwUk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="my-10 bg-zinc-900 bg-opacity-90 px-4 py-10">
        <div class="md:w-3/5 mx-auto">
            <div class="text-center">
                <p class="text-gray-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lectus purus, feugiat sit amet enim eget, condimentum tincidunt lectus.</p>
            </div>
        </div>
    </section>

    <section class="my-10 px-4">
        <div class="md:w-4/5 mx-auto">
            <h2 class="font-bold text-2xl uppercase text-center">Our Value Proposition</h2>
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
</main>
@endsection

@section('js')

@endsection