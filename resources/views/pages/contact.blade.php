@extends('layouts.master')
@section('content')
@include('layouts.header')
<main class="pt-20">
    <section class="bg-home text-center h-36 flex">
        <div class="md:w-4/5 mx-auto text-white my-auto">
            <h1 class="font-bold text-5xl uppercase" data-aos="fade-left" data-aos-duration="2000">Contact</h1>
        </div>       
    </section>
    <section class="my-10 px-4">
        <div class="md:w-4/5 mx-auto my-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="w-full grow">
                    <div id="map2" class="z-20 w-full h-full"></div>
                </div>
                <div>
                    <h2 class="font-bold text-2xl uppercase" data-aos="fade-down" data-aos-offset="50" data-aos-duration="1000">Contact Us</h2>
                    <hr class="my-2 w-2/5 border-blue-900 border-opacity-70" data-aos="fade-in" data-aos-offset="50" data-aos-duration="2000">
                    <div>
                        <p>Jl. Setu Raya No.71, RT.001/RW.002, Padurenan, Kec. Mustika Jaya, Kota Bks, Jawa Barat 17151</p>
                        <p class="my-2"><i class='bx bx-phone'></i> (021) 2986683</p>
                        <p class="my-2"><i class='bx bx-envelope'></i> globalbumiutama1@gmail.com</p>
                        <a class="my-2 block" href=""><i class='bx bxl-facebook-square'></i> @globalbumiutama</a>
                        <a class="my-2 block" href=""><i class='bx bxl-instagram-alt'></i>globalbumiutama</a>
                        <a class="my-2 block" href=""><i class='bx bxl-linkedin-square'></i>globalbumiutama</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="enquiry" class="my-10 px-4">
        <div class="md:w-4/5 mx-auto my-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h2 class="font-bold text-2xl uppercase" data-aos="fade-down" data-aos-offset="50" data-aos-duration="1000">Online Enquiry Form</h2>
                    <hr class="my-2 w-2/5 border-blue-900 border-opacity-70" data-aos="fade-in" data-aos-offset="50" data-aos-duration="2000">
                    <div>
                        <p>Please feel free to send us your enquiry by completing the form below. Our customer service representative will contact you shortly.</p>
                        
                        <form class="mt-5 w-full">
                          <div class="md:flex md:items-center mb-4">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Full Name
                              </label>
                            </div>
                            <div class="w-full">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Full Name">
                            </div>
                          </div>
                          <div class="md:flex md:items-center mb-4">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Company Name
                              </label>
                            </div>
                            <div class="w-full">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Company Name">
                            </div>
                          </div>
                          <div class="md:flex md:items-center mb-4">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Address
                              </label>
                            </div>
                            <div class="w-full">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Address">
                            </div>
                          </div>
                          <div class="md:flex md:items-center mb-4">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Telephone
                              </label>
                            </div>
                            <div class="w-full">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Telephone">
                            </div>
                          </div>                                                                              
                          <div class="md:flex md:items-center mb-4">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Email
                              </label>
                            </div>
                            <div class="w-full">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Email Address">
                            </div>
                          </div>
                          <div class="md:flex md:items-center mb-4">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Message
                              </label>
                            </div>
                            <div class="w-full">
                              <textarea rows="5" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Message"></textarea>
                            </div>
                          </div>                          
                          <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="w-full">
                              <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                Send
                              </button>
                            </div>
                          </div>
                        </form>


                    </div>
                </div>
                <div>
                    <img src="{{URL::asset('img/contact.jpg')}}" alt="..." />
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')
    <script type="text/javascript">
        var map2 = L.map('map2').setView([51.505, -0.09], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map2);
    </script>
@endsection