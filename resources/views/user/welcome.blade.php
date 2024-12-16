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

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

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

        .border-blue {
            border-color: #6390cb;
        }

        .filter-dongker-bg {
            background-color: #072233;
        }

        .filter-blue-font {
            color: #6390cb;
        }

        .blue-dark {
            background-color: #25527b;
            border-color: #25527b;
        }

        .hover-blue:hover {
            color: #25527b;
        }

        .hover-blue-bg:hover {
            background-color: #25527b;
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
                        class="hidden md:block md:px-7 md:py-2 md:rounded-full md:text-white md:bg-sky-500 hover-blue-bg">Login</button>
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

                <div class="items-center justify-center hidden w-full md:flex md:w-auto md:order-1">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:ml-12">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded md:hover:bg-transparent hover-blue md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded md:hover:bg-transparent hover-blue md:p-0">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded md:hover:bg-transparent hover-blue md:p-0 ">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white rounded md:hover:bg-transparent hover-blue md:p-0 ">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- End Of Navbar --}}

    </header>

    <main>

        {{-- Main Page --}}
        <div class="relative mx-auto -mt-[5.5rem] md:h-screen md:w-full">
            <img class="w-full h-full object-cover" src="assets/static/images/bg/backgroundUtama.jpg" alt=""
                loading="lazy">

            <div
                class="absolute inset-0 z-10 flex flex-col items-center justify-center text-white p-4 text-center mt-32">
                <h4 class="text-3xl font-semibold md:text-5xl">
                    Escape From Reality <br> Let's Explore The World
                </h4>
                <p class="text-base font-medium mt-5 md:mt-8">
                    We provide mountain entrance ticket services throughout Indonesia
                </p>
                <button type="button"
                    class="z-30 flex items-center justify-center mt-8 space-x-2 filter-blue-bg px-5 py-2 rounded-xl text-white">
                    Book Now <i class="bi bi-arrow-up-right text-xs ml-2"></i>
                </button>
            </div>
        </div>
        {{-- End of Main Page --}}

        {{-- Section Services --}}
        <section class="filter-dongker-bg min-h-screen flex flex-col items-center justify-center text-white p-4 -mt-2">
            <div class="text-center mt-8">
                <p class="my-4 text-sm filter-blue-font md:text-base">Get Among Experience</p>
                <h2 class="text-lg font-bold md:text-3xl">Find Mountain Ticket</h2>
                <p class="mt-1 text-slate-300 text-base">Plan your journey with our expert services</p>
            </div>

            {{-- Card for services --}}
            <div class="container mx-auto px-4 mt-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center justify-center">
                    <div class="flex justify-center">
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg text-center">
                            <div class="border-2 blue-dark rounded-full p-4 inline-block my-4 bg-sky-700">
                                <i class="bi bi-calendar-event text-3xl text-white"></i>
                            </div>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-4 text-white">Schedule a Plan</div>
                                <p class="text-slate-400">Organize your mountain adventure with our easy-to-use
                                    scheduling tools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg text-center">
                            <div class="border-2 blue-dark rounded-full p-4 inline-block my-4 bg-sky-700">
                                <i class="bi bi-geo text-3xl text-white"></i>
                            </div>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-4 text-white">Find a Mountain</div>
                                <p class="text-slate-400">Discover the best mountains to explore with our detailed
                                    guides and tips.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg text-center">
                            <div class="border-2 blue-dark rounded-full p-4 inline-block my-4 bg-sky-700">
                                <i class="bi bi-binoculars text-3xl text-white"></i>
                            </div>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-4 text-white">Enjoy the Nature</div>
                                <p class="text-slate-400">Immerse yourself in nature and enjoy breathtaking views and
                                    experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- End Section Services --}}

        {{-- Recomended Mountain --}}
        <section class="filter-dongker-bg p-4 -mt-8">
            <div class="mx-auto container">
                <div class="py-8">
                    <p class="text-sm filter-blue-font md:text-base">Popular Mountain for Beginner</p>
                    <div class="flex justify-between items-center mt-3">
                        <h2 class="text-lg md:text-3xl font-bold text-white">Recommended Destination</h2>
                        <div class="flex space-x-2 gap-3 mr-8"> <button id="slideLeft"
                                class="text-lg text-white blue-dark rounded-full w-10 h-10 flex items-center justify-center">
                                <i class="bi bi-arrow-left"></i> </button> <button id="slideRight"
                                class="text-lg text-white blue-dark rounded-full w-10 h-10 flex items-center justify-center">
                                <i class="bi bi-arrow-right"></i> </button> </div>
                    </div>
                </div> {{-- Card of Mountain Content --}} <div class="overflow-x-hidden">
                    <div id="slider" class="flex space-x-4 mt-2 transition-transform ease-in-out duration-300">
                        <div class="min-w-[190px] sm:min-w-[200px] max-w-xs overflow-hidden shadow-lg relative"> <img
                                class="w-full h-80 sm:h-80 md:h-96 lg:h-[400px] object-cover"
                                src="assets/static/images/mountain/gunungNglanggeran.jpg" alt="">
                            <div class="absolute bottom-0 left-0 w-full px-6 py-4">
                                <div class="font-bold text-xl text-white">Mountain Nglanggeran</div>
                                <p class="text-base text-slate-200">Yogyakarta, Central Java</p>
                            </div>
                        </div>
                        <div class="min-w-[190px] sm:min-w-[200px] max-w-xs overflow-hidden shadow-lg relative"> <img
                                class="w-full h-80 sm:h-80 md:h-96 lg:h-[400px] object-cover"
                                src="assets/static/images/mountain/gunungAndong.jpg" alt="">
                            <div class="absolute bottom-0 left-0 w-full px-6 py-4">
                                <div class="font-bold text-xl text-white">Mountain Andong</div>
                                <p class="text-base text-slate-200">Magelang, Central Java</p>
                            </div>
                        </div>
                        <div class="min-w-[190px] sm:min-w-[200px] max-w-xs overflow-hidden shadow-lg relative"> <img
                                class="w-full h-80 sm:h-80 md:h-96 lg:h-[400px] object-cover"
                                src="assets/static/images/mountain/gunungPrau.jpg" alt="">
                            <div class="absolute bottom-0 left-0 w-full px-6 py-4">
                                <div class="font-bold text-xl text-white">Mountain Prau</div>
                                <p class="text-base text-slate-200">Dieng Central Java</p>
                            </div>
                        </div>
                        <div class="min-w-[190px] sm:min-w-[200px] max-w-xs overflow-hidden shadow-lg relative"> <img
                                class="w-full h-80 sm:h-80 md:h-96 lg:h-[400px] object-cover"
                                src="assets/static/images/mountain/gunungNglanggeran.jpg" alt="">
                            <div class="absolute bottom-0 left-0 w-full px-6 py-4">
                                <div class="font-bold text-xl text-white">Mountain Gede</div>
                                <p class="text-base text-slate-200">Yogyakarta, Central Java</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of Mountain Content --}}

        </section>
        {{-- End of recommended Mountain --}}

    </main>

</body>

</html>
