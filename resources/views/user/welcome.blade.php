<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GunungKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div class="bg-neutral-900 h-screen bg-cover bg-fill flex overflow-hidden"
        style="background-image: url('assets/static/images/bg/background.png')">

        <div class="flex-grow flex">
            <div class="flex flex-col relative backdrop-blur-sm border-b border-zinc-700 flex-grow">
                {{-- <div class="container mx-auto flex items-center flex-row justify-between">
                    <img src="https://www.dummyimage.com/500x500/fff/000.png" class="h-8" alt="">

                    <div class="flex items-center justify-between gap-16 h-14 ml-8">
                        <div class="text-zinc-300 font-bold">BERANDA</div>
                        <div class="text-zinc-300 font-bold">INFORMASI</div>
                        <div class="text-zinc-300 font-bold">PERATURAN</div>
                        <div class="text-zinc-300 font-bold">REKOMENDASI PEMULA</div>
                    </div>

                    <div class="text-zinc-300">
                        <p>login</p>
                    </div>
                </div> --}}

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

                <div class="h-screen relative container mx-auto md:justify-center flex flex-col">
                    <div class="flex flex-col p-8">
                        <p class="text-5xl font-bold">JELAJAHI DAN NIKMATI</p>
                        <p class="text-5xl font-bold">GUNUNG</p>
                        <p class="pt-8">live your dream and explore</p>
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
