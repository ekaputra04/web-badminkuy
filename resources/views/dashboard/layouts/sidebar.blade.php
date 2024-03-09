<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">
                BadminKuy | Dashboard
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted ">
                    <span>Umum</span>
                </h6>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-lapangan') ? 'active' : '' }}" href="/dashboard/daftar-lapangan">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Daftar Lapangan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-raket') ? 'active' : '' }}" href="/dashboard/daftar-raket">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Daftar Raket
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/daftar-kok">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Daftar Kok
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/daftar-pengguna">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Daftar Pengguna
                    </a>
                </li>                

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted ">
                    <span>Transaksi</span>
                </h6>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/pemesanan-lapangan">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Pemesanan Lapangan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/pemesanan-raket">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Pemesanan Raket
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/pemesanan-kok">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Pemesanan Kok
                    </a>
                </li>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted ">
                    <span>Review</span>
                </h6>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/review-lapangan">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Review Lapangan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-kok') ? 'active' : '' }}" href="/dashboard/review-raket">
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Review Raket
                    </a>
                </li>
            </ul>

            <hr>

            <ul class="nav flex-column mb-5">                
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2">
                            <i class="bi bi-box-arrow-right "></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
