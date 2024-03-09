<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="img/logo-badminkuy.png" type="image/x-icon">

    {{-- <link rel="stylesheet" href=@vite('/css/app.css')> --}}
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .navbar-fixed {
            @apply fixed z-[999] bg-white bg-opacity-60;
            backdrop-filter: blur(5px);
            box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.2);
            color: black;
        }

        .hamburger-line {
            @apply w-[30px] h-[2px] my-2 block bg-yellow-500;
        }

        .hamburger-active>span:nth-child(1) {
            @apply rotate-45;
        }

        .hamburger-active>span:nth-child(2) {
            @apply scale-0;
        }

        .hamburger-active>span:nth-child(3) {
            @apply -rotate-45;
        }

    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            content: [
                "./resources/**/*.blade.php",
                "./resources/**/*.js",
                "./resources/**/*.vue",
            ],
            theme: {
                extend: {
                    colors: {
                        primary: "#facc15", //sky-500
                        dark: "#0f172a",
                        secondary: "#64748b", //slate-500
                    },
                },
            },
            plugins: [],
        }

        window.onscroll = function() {
            const header = document.querySelector("header");
            const fixedNav = header.offsetTop;
            const scrollToTop = document.querySelector("#scroll-to-top");

            if (window.scrollY > fixedNav) {
                header.classList.add("navbar-fixed");
                scrollToTop.classList.remove("hidden");
            } else {
                header.classList.remove("navbar-fixed");
                scrollToTop.classList.add("hidden");
            }
        };

        const hamburger = document.querySelector("#hamburger");
        const navMenu = document.querySelector("#nav-menu");
        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("hamburger-active");
            navMenu.classList.toggle("hidden");
        });
    </script>
    <title>Badminkuy</title>
</head>

<body>
    @include('partials/navbar')
    @yield('container')
    @include('partials/footer')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        AOS.init();
    </script>
</body>

</html>
