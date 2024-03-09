@extends('./layouts/main')

@section('container')
    <div class="">
        {{-- hero section start --}}
        <section id="hero">
            <div class="home h-[100vh] ">
                <div
                    class="absolute  text-white text-center mx-auto left-[50%] -translate-x-[50%] top-[50%] -translate-y-[50%]">
                    <div class="">
                        <h2 class="text-5xl font-bold lg:text-7xl" data-aos="fade-up" data-aos-duration="1500">Badmin<span class="text-primary">Kuy</span></h2>
                        <p class="text-lg font-semibold lg:text-xl" data-aos="fade-up" data-aos-duration="1500">Olahraga <span class="text-primary">Teratur</span>, Badan
                            Menjadi <span class="text-primary">Lentur</span></p>
                    </div>
                </div>
                <img src="img/background.jpg" alt="" class="absolute z-[-1] w-full h-[100vh] object-cover">
            </div>
        </section>
        {{-- hero section end --}}

        {{-- tentang badminkuy start --}}
        <section id="tentang">
            <div class="lg:px-40 py-16 mx-auto">
                <h3 class="text-2xl font-bold text-dark text-center py-6" data-aos="fade-up" data-aos-duration="1500">Tentang Badmin<span
                        class="text-primary">Kuy</span>
                </h3>
                <div class="lg:flex">
                    <div class="w-full p-6 overflow-hidden ">
                        <div class="overflow-hidden rounded-xl shadow-lg aspect-video" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="img/lapangan.jpg" alt=""
                                class="transition-all hover:scale-125 duration-500 ease-in-out">
                        </div>
                    </div>
                    <div class="w-full p-6 lg:flex lg:items-center lg:justify-center" >
                        <p class="text-lg text-dark text-center lg:text-left lg:text-2xl lg:items-center lg:block" data-aos="fade-left" data-aos-duration="1500">
                            <span class="font-bold">Badmin<span class="text-primary">Kuy</span></span> adalah suatu platform
                            penyedia informasi lapangan bulutangkis <span class="font-semibold">terlengkap</span> yang ada
                            di
                            Bali.
                        </p>
                    </div>
                </div>
                <div class="lg:flex lg:flex-row-reverse ">
                    <div class="w-full p-6 overflow-hidden ">
                        <div class="overflow-hidden rounded-xl shadow-lg aspect-video" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="img/raket.jpg" alt=""
                                class="transition-all object-cover hover:scale-125 duration-500 ease-in-out">
                        </div>
                    </div>
                    <div class="w-full p-6 lg:flex lg:items-center lg:justify-center">
                        <p class="text-lg text-dark text-center lg:text-left lg:text-2xl lg:items-center lg:block" data-aos="fade-right" data-aos-duration="1500">
                            <span class="font-bold">Badmin<span class="text-primary">Kuy</span></span> menyediakan berbagai
                            macam raket dengan segala jenis merk yang dapat anda sewa untuk kepuasan bermain pelanggan.
                        </p>
                    </div>
                </div>
                <div class="lg:flex">
                    <div class="w-full p-6 overflow-hidden ">
                        <div class="overflow-hidden rounded-xl shadow-lg aspect-video" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="img/kok.jpg" alt=""
                                class="transition-all hover:scale-125 duration-500 ease-in-out">
                        </div>
                    </div>
                    <div class="w-full p-6 lg:flex lg:items-center lg:justify-center">
                        <p class="text-lg text-dark text-center lg:text-left lg:text-2xl lg:items-center lg:block" data-aos="fade-left" data-aos-duration="1500">
                            <span class="font-bold">Badmin<span class="text-primary">Kuy</span></span> juga menjual berbagai
                            macam kok, mulai dari kualitas standar hingga kualitas internasional.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- tentang badminkuy end --}}

        {{-- contact start --}}
        <section id="contact" class="bg-primary max-w-full" >
            <div class="lg:px-40 py-16 mx-auto" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="text-center text-xl font-bold text-dark py-6">Hubungi Kami</h2>
                <div class="lg:w-2/3 mx-auto">
                    <form action="">
                        <div class="w-full px-6 mb-8">
                            <label for="name" class="text-base text-dark font-bold">Nama</label>
                            <input type="text" id="name"
                                class="w-full p-2 bg-slate-200 text-dark rounded-md focus:ring-primary focus:ring-1 focus:border-primary" />
                        </div>
                        <div class="w-full px-6 mb-8">
                            <label for="email" class="text-base text-dark font-bold">Email</label>
                            <input type="text" id="email"
                                class="w-full p-2 bg-slate-200 text-dark rounded-md focus:ring-primary focus:ring-1 focus:border-primary" />
                        </div>
                        <div class="w-full px-6 mb-3">
                            <label for="pesan" class="text-base text-dark font-bold">Pesan</label>
                            <textarea type="text" id="pesan"
                                class="w-full p-2 bg-slate-200 text-dark rounded-md focus:ring-primary focus:ring-1 focus:border-primary h-32">
                            </textarea>
                        </div>

                        <div class="w-full px-6 mb-8">
                            <button type="submit"
                                class="text-base font-bold text-dark py-1 px-3 rounded-full bg-white hover:bg-primary hover:text-dark hover:border hover:border-dark mt-4 transition duration-300 mx-auto">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

    </div>
    {{-- contact end --}}

    <!-- scroll to top -->
    <a href="#" id="scroll-to-top">
        <div
            class="h-10 w-10 bg-yellow-500 fixed right-8 bottom-8 flex justify-center items-center font-bold text-dark text-xl rounded-lg animate-bounce shadow-lg hover:bg-yellow-700 hover:text-white">
            ^
        </div>
    </a>
    </div>
@endsection
