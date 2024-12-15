<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GunungKu</title>

    {{-- Script Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- Fonts --}}
    <style>
        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        .filter-white {
            filter: brightness(0) invert(1);
        }

        .filter-blue-bg {
            background: #6390cb;
        }
        .filter-dongker-bg {
            background-color: #072233;
        }
    </style>

</head>

<body class="antialiased font-inter">

    <header>

        {{-- Navbar --}}
        <nav class="bg-white/10 backdrop-blur-sm sticky w-full z-20 top-0 start-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                {{-- Logo --}}
                <a href="#">
                    <img src="" alt="">
                    <span class="font-bold text-3xl text-white">G.</span>
                </a>

                {{-- Mobile Perspective --}}
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="hidden md:block md:px-7 md:py-2 md:rounded-full md:text-white md:bg-sky-600">Login</button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-14 h-14 justify-center text-md text-gray-500 rounded-lg md:hidden"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-14 h-14" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:ml-20">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Contact</a>
                        </li>
                    </ul>
                </div>
        </nav>
        {{-- End Of Navbar --}}

    </header>

    <main>

        {{-- Main Page --}}
        <div class="relative mx-auto -mt-[5.5rem] md:h-screen md:w-full">
            <img class="absolute md:w-full md:h-full object-cover z-0" src="assets/static/images/bg/backgroundUtama.jpg"
                alt="">

            <div
                class="absolute inset-0 z-10 flex flex-col items-center justify-center text-white p-4 text-center mt-[12.5rem] md:mt-2">
                <h4 class="text-5xl font-semibold">
                    Escape From Reality <br> Let's Explore The World
                </h4>
                <p class="text-base font-medium mt-8">
                    We provide mountain entrance ticket services throughout Indonesia
                </p>
                <button type="button"
                    class="z-30 flex items-center justify-center mt-10 space-x-2 filter-blue-bg px-5 py-2 rounded-xl text-white">
                    Book Now <img src="assets/static/images/svg-loaders/arrow-up-right-icon.svg" alt=""
                        class="w-4 h-4 filter-white">
                </button>
            </div>
        </div>
        {{-- End of Main Page --}}

        {{-- Section Mountain Rating--}}
        <section>
            <div class="filter-dongker-bg h-14"></div>
        </section>
    </main>

</body>

</html>
