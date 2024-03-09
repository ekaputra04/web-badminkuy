@extends('./layouts/main')

@section('container')
<div class="">
    <div class="px-40 py-28">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
            {{-- @for ($i = 0; $i < 20; $i++) --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="w-full h-48 overflow-hidden">
                    <img src="img/lapangan.jpg" alt="">
                </div>
                <div class="p-4">
                    <h1 class="font-semibold text-lg mb-3 text-slate-800">Lapangan 1</h1>
                    <p class="text-slate-700">Kelas : Gold</p>
                    <p class="text-slate-700">Lokasi : Gianyar</p>
                    <p class="text-slate-700">Harga : Rp. 10000</p>
                    <button
                        class="px-4 py-2 bg-green-500 mt-3 font-semibold text-xs text-slate-800 rounded-lg hover:bg-green-600 hover:text-slate-200">Pesan
                        Sekarang</button>
                    <p class="px-4 py-2 bg-yellow-500 mt-3 font-semibold text-xs text-slate-800 rounded-lg inline-block">Lapangan Tidak Tersedia</p>
                </div>
            </div>
            {{-- @endfor --}}
        </div>
    </div>
</div>

    <!-- scroll to top -->
    <a href="#" id="scroll-to-top">
        <div
            class="h-10 w-10 bg-yellow-500 fixed right-8 bottom-8 flex justify-center items-center font-bold text-dark text-xl rounded-lg animate-bounce shadow-lg hover:bg-yellow-700 hover:text-white">
            ^
        </div>
    </a>
@endsection
