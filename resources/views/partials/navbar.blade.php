<!-- Header start-->
<header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10 lg:px-40 py-4 lg:py-0">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/" class="font-bold text-lg text-yellow-500 block py-1 lg:text-2xl">BadminKuy</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-500 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-500 ease-in-out"></span>
                    <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-transparent shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none bg-white bg-top ">
                    <ul
                        class="block lg:flex transition duration-1000 ease-in-out text-dark lg:text-yellow-500 font-semibold
        ">
                        <li class="group">
                            <a href="/" class="text-base  py-1 px-4 group-hover:text-yellow-700 flex">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/daftar-lapangan"
                                class="text-base  py-1 px-4 group-hover:text-yellow-700 flex">Daftar Lapangan</a>
                        </li>
                        <li class="group">
                            <a href="/daftar-raket" class="text-base  py-1 px-4 group-hover:text-yellow-700 flex">Daftar
                                Raket</a>
                        </li>

                        @auth                
                            @can('admin')
                                <li class="group">
                                    <a href="/dashboard"
                                        class="text-base  py-1 px-4 group-hover:text-yellow-700 flex">Dashboard</a>
                                </li>
                            @else
                                <li class="group">
                                    <a href="/transaksi"
                                        class="text-base  py-1 px-4 group-hover:text-yellow-700 flex">Transaksi</a>
                                </li>
                            @endcan
                            <li class="group">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <p
                                        class="text-base  py-1 px-4 mx-4 md:mx-0 group-hover:text-yellow-700 flex border border-1 border-yellow-500 hover:border-yellow-700 rounded-lg">
                                        <button type="submit" class="">
                                            <i class="bi bi-box-arrow-right "></i> Logout
                                        </button>
                                    </p>
                                </form>
                            </li>                            
                        @else
                            <li class="group">
                                <a href="/login"
                                    class="text-base  py-1 px-4 mx-4 md:mx-0 group-hover:text-yellow-700 flex border border-1 border-yellow-500 hover:border-yellow-700 rounded-lg"><i
                                        class="bi bi-box-arrow-in-right mr-2"></i> Login</a>
                            </li>
                        @endauth
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header end-->
