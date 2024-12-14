<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GunungKu</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=abeezee:400" rel="stylesheet" />

    <style>
        .font-abeezee {
            font-family: 'ABeeZee', sans-serif;
        }
    </style>
</head>

<body class="antialiased font-abeezee">
    <div
        class="sticky shrink-0 z-10 -mb-16 container px-4 h-16 backdrop-blur-sm top-0 mx-auto flex items-center flex-row justify-between">
        <img src="{{ asset('logo.png') }}" class="h-10" alt="">

        <div class="items-center justify-between gap-16 hidden md:flex">
            <div class="text-black">BERANDA</div>
            <div class="text-black">INFORMASI</div>
            <div class="text-black">PERATURAN</div>
            <a href="#rekomendasi"
                class="text-black relative border border-white/50 py-2 px-4 -mx-4 bg-[#FFD2BF] rounded-md">
                <p class="text-black">REKOMENDASI PEMULA</p>

                {{-- collapse aja --}}
                <svg class="absolute top-0 right-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify"
                    viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <clipPath id="0c4b80ae52">
                            <path
                                d="M 30.046875 38.34375 L 355 38.34375 L 355 363.300781 L 30.046875 363.300781 Z M 30.046875 38.34375 "
                                clip-rule="nonzero" />
                        </clipPath>
                        <clipPath id="40ee65149c">
                            <path
                                d="M 232.027344 11.636719 L 375 11.636719 L 375 154 L 232.027344 154 Z M 232.027344 11.636719 "
                                clip-rule="nonzero" />
                        </clipPath>
                    </defs>
                    <g clip-path="url(#0c4b80ae52)">
                        <path fill="#100f0d"
                            d="M 192.589844 38.695312 C 188.367188 193.347656 184.9375 196.773438 30.257812 200.996094 C 184.9375 205.222656 188.367188 208.648438 192.589844 363.300781 C 196.8125 208.648438 200.238281 205.222656 354.921875 200.996094 C 200.238281 196.773438 196.8125 193.347656 192.589844 38.695312 "
                            fill-opacity="1" fill-rule="nonzero" />
                    </g>
                    <path fill="#100f0d"
                        d="M 46.816406 228.402344 C 45.597656 273.003906 44.609375 273.992188 0 275.207031 C 44.609375 276.425781 45.597656 277.414062 46.816406 322.015625 C 48.035156 277.414062 49.023438 276.425781 93.632812 275.207031 C 49.023438 273.992188 48.035156 273.003906 46.816406 228.402344 "
                        fill-opacity="1" fill-rule="nonzero" />
                    <g clip-path="url(#40ee65149c)">
                        <path fill="#100f0d"
                            d="M 303.902344 153.863281 C 305.753906 86.105469 307.253906 84.601562 375.027344 82.753906 C 307.253906 80.902344 305.753906 79.402344 303.902344 11.640625 C 302.050781 79.402344 300.550781 80.902344 232.78125 82.753906 C 300.550781 84.601562 302.050781 86.105469 303.902344 153.863281 "
                            fill-opacity="1" fill-rule="nonzero" />
                    </g>
                </svg>
            </a>
        </div>

        <a href="/register" class="bg-black py-2 px-4 rounded-lg hidden md:flex">
            <p class="text-white">PESAN TIKET</p>
        </a>
    </div>

    <div class="bg-neutral-900 pt-16 h-screen bg-cover bg-fill flex flex-col overflow-hidden"
        style="background-image: url('assets/static/images/bg/background.png')">

        <div class="flex-grow flex">
            <div class="flex flex-col relative backdrop-blur-sm border-b border-zinc-700 flex-grow">
                <img id="mountain-back" src="{{ asset('assets/static/images/mountain/mountain-back.png') }}"
                    class="absolute bottom-0 left-0" alt="">
                <img id="mountain-right" src="{{ asset('assets/static/images/mountain/mountain-right.png') }}"
                    class="absolute right-0 bottom-0" alt="">
                <img id="mountain-left" src="{{ asset('assets/static/images/mountain/mountain-left.png') }}"
                    class="absolute left-0 bottom-0" alt="">

                <div id="sun" class="top-1/2 left-1/2 -translate-x-[100%] -translate-y-[70%] absolute">
                    <img src="{{ asset('assets/static/images/sun.svg') }}" class="h-40 md:h-48 lg:h-56 xl:h-64 2xl:h-72"
                        alt="">
                </div>

                <img src="{{ asset('assets/static/images/cloud1.png') }}"
                    class="absolute left-1/2 top-1/2 translate-x-[-60%] translate-y-[-30%]" alt="">
                <img src="{{ asset('assets/static/images/cloud2.png') }}" class="absolute left-0 bottom-0"
                    alt="">

                <div class="h-screen relative container mx-auto justify-center flex flex-col">
                    <div class="flex flex-col p-4">
                        <p class="text-5xl font-bold">JELAJAHI DAN NIKMATI</p>
                        <p class="text-5xl font-bold">GUNUNG</p>
                        <p class="pt-8 ml-4">no gunung no life.</p>

                        <a href="/login" class="bg-black py-2 px-4 rounded-lg w-fit mt-6 md:hidden">
                            <p class="text-white">PESAN TIKET</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="h-screen bg-[#FFD2BF] relative">
        <img src="{{ asset('assets/static/images/mountain-right.png') }}" class="absolute right-0 bottom-0"
            alt="">
        <img src="{{ asset('assets/static/images/mountain-bottom.png') }}" class="absolute bottom-0 left-0"
            alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/motion@11.11.13/dist/motion.js"></script>
    <script>
        const {
            animate,
            scroll
        } = Motion

        const boxes = document.querySelectorAll(".box")

        const duration = 2000;

        animate("#mountain-right", {
            x: ["100%", "0%"],
            opacity: [0, 1]
        }, {
            duration: 2
        });

        setTimeout(() => {
            animate("#mountain-right", {
                x: ["5px", "0px", "5px"]
            }, {
                duration: 3,
                repeat: Infinity,
            });
        }, duration);

        animate("#mountain-left", {
            x: ["-100%", "0%"],
            opacity: [0, 1]
        }, {
            duration: 2
        });

        setTimeout(() => {
            animate("#mountain-left", {
                x: ["-5px", "0px", "-5px"]
            }, {
                duration: 3.5,
                repeat: Infinity,
            });
        }, duration);

        animate("#mountain-back", {
            y: ["100%", "0%"],
            opacity: [0, 1]
        }, {
            duration: 2
        });

        setTimeout(() => {
            animate("#mountain-back", {
                x: ["-5px", "5px", "-5px"]
            }, {
                duration: 2.2,
                repeat: Infinity,
            });
        }, duration);

        animate("#sun", {
            y: ["100%", "-70%"],
            x: "-100%",
            opacity: [0, 1]
        }, {
            duration: 2,
            type: 'spring'
        });

        setTimeout(() => {
            animate("#sun", {
                y: ["-70%", "-75%", "-70%"]
            }, {
                duration: 2.6,
                repeat: Infinity,
                direction: "alternate"
            });
        }, duration);
    </script>
</body>

</html>
