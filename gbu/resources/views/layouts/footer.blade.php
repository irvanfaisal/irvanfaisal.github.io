<footer class="bg-zinc-900 bg-opacity-90 text-gray-100">
    <div class="px-10 py-5 md:w-4/5 mx-auto">
        <div class="grid grid-cols-4">
            <div>
                <p class="my-2 text-lg uppercase font-bold">Products</p>
                <a href="{{ url('product') }}" class="my-1 text-sm block hover:underline">Trolley</a>
                <a href="{{ url('product') }}" class="my-1 text-sm block hover:underline">Hydraulic lift & Hydraulic Pallet</a>
                <a href="{{ url('product') }}" class="my-1 text-sm block hover:underline">Conveyor</a>
                <a href="{{ url('product') }}" class="my-1 text-sm block hover:underline">Storage Rack</a>
            </div>
            <div>
                <p class="my-2 text-lg">&nbsp;</p>
                <a href="{{ url('about') }}" class="my-1 text-sm block hover:underline">About</a>
                <a href="{{ url('contact') }}" class="my-1 text-sm block hover:underline">Contact</a>
                <a href="{{ url('contact') }}#enquiry" class="my-1 text-sm block hover:underline">Enquiry</a>
                <a href="{{ url('') }}" class="my-1 text-sm block hover:underline">Catalog</a>
            </div>
            <div>
                <p class="my-2 text-lg">&nbsp;</p>
                <p class="my-1 text-sm">Jakarta, Indonesia (40152)</p>
                <p class="my-1 text-sm"><i class='bx bx-phone'></i> (021) 12386932</p>
                <p class="my-1 text-sm"><i class='bx bx-envelope'></i> globalbumiutama1@gmail.com</p>
            </div>
            <div id="map"></div>
        </div>
    </div>
    <div class="py-2 border-t border-opacity-10 border-slate-300">
        <div class="md:w-4/5 mx-auto px-10">
            <div class="flex justify-center">
                <p class="text-xs my-auto">&copy; Copyright {{ \Carbon\Carbon::now()->format('Y') }} Global Bumi Utama</p>
            </div>
        </div>
    </div>
</footer>