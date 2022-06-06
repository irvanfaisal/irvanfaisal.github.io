@extends('layouts.master')
@section('content')
@include('layouts.header')
<main class="pt-20">
    <section>
        <div class="mx-auto">
            <div class="grid grid-cols-6">
                <div class="hidden md:block p-5 bg-zinc-900 bg-opacity-90">
                    <a class="block text-gray-100 border-b py-2 text-sm border-1 border-gray-500" href="">Trolley</a>
                    <a class="block text-gray-100 border-b py-2 text-sm border-1 border-gray-500" href="">Hydraulic lift & Hydraulic Pallet</a>
                    <a class="block text-gray-100 border-b py-2 text-sm border-1 border-gray-500" href="">Conveyor</a>
                    <a class="block text-gray-100 border-b py-2 text-sm border-1 border-gray-500" href="">Storage Rack</a>
                </div>
                <div class="p-5 col-span-6 md:col-span-5">
                    <p class="text-2xl font-bold uppercase mb-5">Our Products</p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-1">
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-1.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-600 p-2 group-hover:bg-blue-500">
                                <p class="my-auto text-gray-100 text-sm">Trolley</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="500" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-2.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-700 p-2 group-hover:bg-blue-600">
                                <p class="my-auto text-gray-100 text-sm">Hydraulic lift & Hydraulic Pallet</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1000" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-3.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-800 p-2 group-hover:bg-blue-700">
                                <p class="my-auto text-gray-100 text-sm">Conveyor</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1500" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-4.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-900 p-2 group-hover:bg-blue-800">
                                <p class="my-auto text-gray-100 text-sm">Storage Rack</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-1.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-600 p-2 group-hover:bg-blue-500">
                                <p class="my-auto text-gray-100 text-sm">Trolley</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="500" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-2.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-700 p-2 group-hover:bg-blue-600">
                                <p class="my-auto text-gray-100 text-sm">Hydraulic lift & Hydraulic Pallet</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1000" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-3.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-800 p-2 group-hover:bg-blue-700">
                                <p class="my-auto text-gray-100 text-sm">Conveyor</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1500" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-4.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-900 p-2 group-hover:bg-blue-800">
                                <p class="my-auto text-gray-100 text-sm">Storage Rack</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-1.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-600 p-2 group-hover:bg-blue-500">
                                <p class="my-auto text-gray-100 text-sm">Trolley</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="500" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-2.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-700 p-2 group-hover:bg-blue-600">
                                <p class="my-auto text-gray-100 text-sm">Hydraulic lift & Hydraulic Pallet</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1000" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-3.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-800 p-2 group-hover:bg-blue-700">
                                <p class="my-auto text-gray-100 text-sm">Conveyor</p>
                            </div>
                        </a>
                        <a class="group flex flex-col" href="#" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-delay="1500" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <img src="{{URL::asset('img/product-4.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
                            <div class="grow text-center flex justify-center opacity-80 uppercase bg-blue-900 p-2 group-hover:bg-blue-800">
                                <p class="my-auto text-gray-100 text-sm">Storage Rack</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLongLabel">
          Product
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4 min-vh-100 text-sm">
        <div>
            <img src="{{URL::asset('img/product-1.png')}}" class="group-hover:opacity-100 transition-all opacity-50 block w-auto object-scale-down mx-auto max-h-36 my-5" alt="..." />
            <p class="font-bold">Specifications:</p>
            <ul class="ml-4">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Phasellus sit amet iaculis eros, a posuere nisl.</li>
                <li>Praesent blandit auctor pulvinar. Mauris nec commodo tortor.</li>
                <li>Vestibulum lacinia accumsan massa nec efficitur.</li>
                <li>Mauris felis ipsum, commodo vitae maximus ut, imperdiet mattis libero.</li>
                <li>Ut tristique nisl sem, ut laoreet tellus sagittis in.</li>
                <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus ac diam velit.</li>
            </ul>
                <div class="my-2">
                    <p class="font-bold uppercase" data-aos="fade-down" data-aos-offset="50" data-aos-duration="1000">Online Enquiry Form</p>
                    <hr class="my-2 border-blue-900 border-opacity-70" data-aos="fade-in" data-aos-offset="50" data-aos-duration="2000">
                    <div>
                        <p>Please feel free to send us your enquiry by completing the form below. Our customer service representative will contact you shortly.</p>
                        
                        <form class="mt-5 w-4/5 mx-auto">
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
        </div>
        </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
</main>
@endsection

@section('js')

@endsection