<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Kenangan</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body
    class="bg-[#F8F5EF] text-gray-800"
    style="font-family:Poppins,sans-serif;">

<section class="min-h-screen px-4 md:px-6 py-16 md:py-20">

    <div class="max-w-6xl mx-auto text-center">

        <div
            class="inline-block px-5 py-2 rounded-full bg-[#F5EBD2] text-[#A16A00] text-sm mb-6">

           Pesan Untuk Papa Toon
        </div>

        <h1
            class="text-4xl md:text-6xl font-bold text-[#1F4D3A] mb-4"
            style="font-family:'Cormorant Garamond', serif;">

            Dari Kami Untuk Papa Toon

        </h1>

        <p
            class="max-w-2xl mx-auto text-gray-600 leading-8 mb-12">

         Video-video ini mungkin singkat, tapi semoga bisa membuat Papa Toon tersenyum dan merasakan betapa banyak orang yang sayang sama Papa Toon.

        </p>

        <div
            class="bg-white rounded-3xl shadow-2xl p-3 md:p-5 max-w-5xl mx-auto overflow-hidden">

            <video
                id="videoPlayer"
                controls
                poster="/images/gallery/1.jpeg"
                class="w-full rounded-2xl aspect-video object-cover">

                <source
                    src="/videos/video1.mp4"
                    type="video/mp4">

            </video>

        </div>

        <div class="mt-8">

            <h3
                id="videoTitle"
                class="text-2xl md:text-3xl font-bold text-[#1F4D3A] mb-2">

                Ucapan Keluarga

            </h3>

            <p
                id="videoCounter"
                class="text-gray-500">

                Video 1 dari 14

            </p>

        </div>

      <div id="dots" class="flex justify-center gap-3 mt-6 flex-wrap">
            <span class="dot active" onclick="goToVideo(0)"></span>
            <span class="dot" onclick="goToVideo(1)"></span>
            <span class="dot" onclick="goToVideo(2)"></span>
            <span class="dot" onclick="goToVideo(3)"></span>
            <span class="dot" onclick="goToVideo(4)"></span>
            <span class="dot" onclick="goToVideo(5)"></span>
            <span class="dot" onclick="goToVideo(6)"></span>
            <span class="dot" onclick="goToVideo(7)"></span>
            <span class="dot" onclick="goToVideo(8)"></span>
            <span class="dot" onclick="goToVideo(9)"></span>
            <span class="dot" onclick="goToVideo(10)"></span>
            <span class="dot" onclick="goToVideo(11)"></span>
            <span class="dot" onclick="goToVideo(12)"></span>
            <span class="dot" onclick="goToVideo(13)"></span>
        </div>

        <div
            class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

            <button
                onclick="prevVideo()"
                class="px-8 py-3 rounded-xl border border-[#1F4D3A] text-[#1F4D3A] hover:bg-white transition">

                ← Video Sebelumnya

            </button>

            <button
                onclick="nextVideo()"
                class="px-8 py-3 rounded-xl bg-[#1F4D3A] text-white hover:bg-[#173a2d] transition">

                Video Berikutnya →

            </button>

        </div>

        <div
            class="mt-14 max-w-2xl mx-auto">

            <p
                class="italic text-lg text-gray-600 leading-8">

                Terima kasih untuk keluarga yang ada di Ambon, Jakarta, Bali, dan di mana pun berada yang sudah meluangkan waktu untuk membuat video ucapan ulang tahun ini.

                Dan untuk Papa Toon, Shirleen berharap video-video sederhana dari setiap keluarga ini bisa membuat Papa tersenyum, merasa disayang, dan mengingat kembali betapa banyak orang yang bersyukur atas kehadiran Papa dalam hidup mereka.

                Mungkin video-video ini tidak panjang, tapi di dalamnya ada doa, kasih sayang, dan harapan terbaik yang kami kirimkan khusus untuk Papa.

Tuhan berkati selalu ya, Papa Toon. 💛


            </p>

        </div>

        <div
            class="mt-20 flex flex-col sm:flex-row justify-center gap-5">

            <a
                href="/gallery"
                class="px-8 py-3 rounded-xl border border-[#1F4D3A] text-[#1F4D3A] hover:bg-white transition">

                ← Gallery

            </a>

            <a
                href="/closing"
                class="px-8 py-3 rounded-xl bg-[#1F4D3A] text-white hover:bg-[#173a2d] transition">

                Closing →

            </a>

        </div>

    </div>

</section>

<style>

.dot{
    width:12px;
    height:12px;
    border-radius:999px;
    background:#d1d5db;
    transition:.3s;
    cursor:pointer;
}

.dot:hover{
    transform:scale(1.15);
}

.dot.active{
    background:#1F4D3A;
    transform:scale(1.25);
}

</style>

<script>

const videos = [
    "/videos/video1.mp4",
    "/videos/video2.mp4",
    "/videos/video3.mov",
    "/videos/video4.mp4",
    "/videos/video5.mp4",
    "/videos/video6.mp4",
    "/videos/video7.mp4",
    "/videos/video8.mp4",
    "/videos/video9.mp4",
    "/videos/video10.mp4",
    "/videos/video11.mp4",
    "/videos/video12.mp4",
    "/videos/video13.mp4",
    "/videos/video14.mp4"
];

const titles = [
    "From Your Wife",
    "Dari Mama Vitta yang Pretty",
    "Big Brother Ka Vitto & Bahasa Belandanya",
    "Keluarga Kecil di Ambon (Lovee) ",
    "Dua frekuensi, satu energi",
    "Supporter Oranje Cabang Ambon",
    "Keluarga Kecil Nan Gemas Ini ",
    "Bapak Kako, Istri, dan Boneka Tindis-Tindis",
    "Nyong Paling Gagah Kahh? Aishh",
    "CEO Perusahaan & Ibu Komisaris",
    "Durasi Pendek, Sayangnya Panjang",
    "Instruksi Hari Ini: Fokus Kiri Bawah",
    "Ibu Maail dan Kedua Cucu",
    "Patch Notes dari Sherry"
];

let currentVideo = 0;

const player =
    document.getElementById('videoPlayer');

updateVideo();

function updateVideo()
{
    player.src =
        videos[currentVideo];

    player.load();

    player.play().catch(() => {});

    document
        .getElementById('videoTitle')
        .innerText =
        titles[currentVideo];

    document
        .getElementById('videoCounter')
        .innerText =
        `Video ${currentVideo + 1} dari ${videos.length}`;

    document
        .querySelectorAll('.dot')
        .forEach((dot,index)=>{

            dot.classList.remove('active');

            if(index === currentVideo)
            {
                dot.classList.add('active');
            }

        });
}

function nextVideo()
{
    currentVideo++;

    if(currentVideo >= videos.length)
    {
        currentVideo = 0;
    }

    updateVideo();
}

function prevVideo()
{
    currentVideo--;

    if(currentVideo < 0)
    {
        currentVideo =
            videos.length - 1;
    }

    updateVideo();
}

function goToVideo(index)
{
    currentVideo = index;

    updateVideo();
}

player.addEventListener('ended', () => {

    nextVideo();

});

</script>
</body>
</html>