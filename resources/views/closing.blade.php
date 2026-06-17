<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penutup</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body
    class="bg-[#F8F5EF]"
    style="font-family:Poppins,sans-serif;">

<section class="min-h-screen px-6 py-20">

    <div class="max-w-6xl mx-auto text-center">

        <div
            class="inline-block px-5 py-2 rounded-full bg-[#F5EBD2] text-[#A16A00] text-sm mb-6">

            Penutup

        </div>

        <h1
            class="text-5xl md:text-7xl font-bold text-[#1F4D3A] mb-6"
            style="font-family:'Cormorant Garamond', serif;">

            From All of Us,
            With Love & Gratitude
        </h1>

        <p
            class="max-w-3xl mx-auto text-gray-600 leading-8 mb-16">

          Website ini mungkin akan berakhir di halaman ini,
          tapi cerita, tawa, dan kenangan akan tetap ada.
        </p>

        <!-- WALL OF MEMORIES -->

        <div class="relative h-[1200px] md:h-[980px] mb-12">

            <!-- FOTO 1 -->
            <div class="absolute top-0 left-0 bg-white p-3 rounded-2xl shadow-xl rotate-[-7deg] hover:scale-105 transition duration-300">
                <img
                src="/images/closing/1.jpeg"
                onclick="openModal(this.src)"
                class="w-52 rounded-xl cursor-pointer">
                <p class="mt-2 text-sm text-gray-500">
                   Rumah Jadi Lebih Ramai
                </p>
            </div>

            <!-- FOTO 2 -->
            <div class="absolute top-12 right-0 bg-white p-3 rounded-2xl shadow-xl rotate-[8deg] hover:scale-105 transition duration-300">
             <img
                src="/images/closing/2.jpeg"
                onclick="openModal(this.src)"
                class="w-52 rounded-xl cursor-pointer">
                <p class="mt-2 text-sm text-gray-500">
                    Brotherhood & Boarding Pass
                </p>
            </div>

            <!-- FOTO 3 -->
          <div class="absolute top-[380px] left-4 bg-white p-3 rounded-2xl shadow-xl rotate-[5deg] hover:scale-105 transition duration-300">
               <img
                src="/images/closing/3.jpeg"
                onclick="openModal(this.src)"
                class="w-52 rounded-xl cursor-pointer">
                <p class="mt-2 text-sm text-gray-500">
                    Cabang Ambon Hadir
                </p>
            </div>

            <!-- FOTO BESAR TENGAH -->
            <div class="absolute top-[250px] left-1/2 -translate-x-1/2 bg-white p-4 rounded-3xl shadow-2xl hover:scale-105 transition duration-300">
                <img
                src="/images/family.jpeg"
                onclick="openModal(this.src)"
                class="w-[340px] md:w-[420px] rounded-2xl cursor-pointer">
                <p class="mt-4 text-gray-600">
                    Keluarga Besar
                </p>
            </div>

            <!-- FOTO 4 -->
            <div class="absolute top-[380px] right-10 bg-white p-3 rounded-2xl shadow-xl rotate-[-8deg] hover:scale-105 transition duration-300">
               <img
                src="/images/closing/4.jpeg"
                onclick="openModal(this.src)"
                class="w-52 rounded-xl cursor-pointer">
                <p class="mt-2 text-sm text-gray-500">
                    Yang Cantik-Cantik Kumpul Dulu
                </p>
            </div>

            <!-- FOTO 5 -->
            <div class="absolute top-[720px] left-0 bg-white p-3 rounded-2xl shadow-xl rotate-[7deg] hover:scale-105 transition duration-300">
                <img
                src="/images/closing/5.jpeg"
                onclick="openModal(this.src)"
                class="w-52 rounded-xl cursor-pointer">
                <p class="mt-2 text-sm text-gray-500">
                    Rapat Pemegang Saham Oersepuny
                </p>
            </div>

            <!-- FOTO 6 -->
            <div class="absolute top-[760px] right-0 bg-white p-3 rounded-2xl shadow-xl rotate-[-5deg] hover:scale-105 transition duration-300">
                <img
                src="/images/closing/6.jpeg"
                onclick="openModal(this.src)"
                class="w-52 rounded-xl cursor-pointer">
                <p class="mt-2 text-sm text-gray-500">
                    Ipar Kesayangan & Tim Bucedo
                </p>
            </div>

        </div>

        <!-- UCAPAN PENUTUP -->

        <p
            class="max-w-3xl mx-auto text-gray-600 leading-8 mb-12">

            Terima kasih untuk keluarga yang ada di Ambon,
            Bali, Jakarta, dan di mana pun berada yang sudah
            meluangkan waktu untuk mengirimkan video ucapan
            dan menjadi bagian dari website kecil ini.

            Semoga setiap pesan, doa, dan kenangan yang
            terkumpul di sini bisa menjadi hadiah sederhana
            yang membawa senyum untuk Papa Toon.

            Happy Birthday Papa Toon! Semoga selalu diberikan
            kesehatan, kebahagiaan, dan banyak berkat dalam
            setiap langkah yang akan datang. 

        </p>

        <div
            class="flex flex-col sm:flex-row justify-center gap-4">

            <a
                href="/video"
                class="px-8 py-3 rounded-xl border border-[#1F4D3A] text-[#1F4D3A]">

                ← Video

            </a>

            <a
                href="/"
                class="px-8 py-3 rounded-xl bg-[#1F4D3A] text-white">

                Kembali ke Awal →

            </a>

        </div>

    </div>

</section>

<div
    id="imageModal"
    class="hidden fixed inset-0 bg-black/80 z-50 flex items-center justify-center p-4">

    <img
        id="modalImage"
        onclick="event.stopPropagation()"
        src=""
        class="max-w-[90%] max-h-[90vh] rounded-2xl shadow-2xl">

</div>

<script>

function openModal(imageSrc)
{
    document.getElementById('modalImage').src = imageSrc;

    document
        .getElementById('imageModal')
        .classList
        .remove('hidden');
}

function closeModal()
{
    document
        .getElementById('imageModal')
        .classList
        .add('hidden');
}

document
    .getElementById('imageModal')
    .addEventListener(
        'click',
        closeModal
    );

    function toggleMusic()
{
    const music =
        document.getElementById('bgMusic');

    const button =
        document.getElementById('musicBtn');

    if(music.paused)
    {
        music.play();

        button.innerHTML =
            '🔊 Sedang Diputar';
    }
    else
    {
        music.pause();

        button.innerHTML =
            '🎶 Endless Love';
    }
}

window.addEventListener(
    'load',
    () =>
    {
        document
            .getElementById('bgMusic')
            .volume = 0.25;
    }
);

</script>

<audio id="bgMusic" loop>
    <source
        src="/music/endless-love.mp3"
        type="audio/mpeg">
</audio>

<button
    id="musicBtn"
    onclick="toggleMusic()"
    class="fixed bottom-5 right-5 bg-white shadow-xl rounded-full px-4 py-3 text-sm text-[#1F4D3A] font-medium z-50">

    🎶 Dancing Queen

</button>

</body>
</html>