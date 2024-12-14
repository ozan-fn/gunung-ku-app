<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GunungKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div class="bg-neutral-900 h-screen bg-cover bg-center flex"
        style="background-image: url('assets/static/images/bg/campsite-at-night_h.jpg')">

        <div class="flex-grow backdrop-blur-sm">
            <div class="container mx-auto flex border-b border-zinc-500 items-center flex-row">
                <img src="https://www.dummyimage.com/500x500/fff/000.png" class="h-8" alt="">

                <div class="flex items-center justify-between gap-16 h-14 ml-8">

                    <div class="text-zinc-300 font-bold">BERANDA</div>
                    <div class="text-zinc-300 font-bold">INFORMASI</div>
                    <div class="text-zinc-300 font-bold">PERATURAN</div>
                    <div class="text-zinc-300 font-bold">REKOMENDASI PEMULA</div>
                </div>
            </div>

            <div></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/motion@11.11.13/dist/motion.js"></script>
    <script>
        const {
            animate,
            scroll
        } = Motion

        const boxes = document.querySelectorAll(".box")

        animate(boxes, {
            opacity: 0
        })
    </script>
</body>

</html>
