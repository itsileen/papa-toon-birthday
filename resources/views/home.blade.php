<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>71 Tahun Penuh Cerita</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body
    class="bg-[#F8F5EF] text-gray-800"
    style="font-family:Poppins,sans-serif;">

<section class="min-h-screen flex items-center justify-center px-6 py-20">

    <div class="text-center max-w-4xl mx-auto">

        <div
            class="inline-block px-4 py-2 rounded-full bg-[#F5EBD2] text-[#A16A00] text-sm mb-6">

            71 Tahun Penuh Cerita

        </div>

        <h1
            class="text-[#1F4D3A] text-5xl md:text-7xl font-bold mb-6"
            style="font-family:'Cormorant Garamond', serif;">

            Untuk Papa Toon

        </h1>

        <p
            class="text-gray-600 text-lg leading-8 max-w-3xl mx-auto mb-14">

            Website kecil ini Shirleen buat sebagai hadiah sederhana
            untuk merayakan 71 tahun kehadiran Papa Toon
            dalam kehidupan kami sekeluarga.

            Berisi foto, cerita di balik setiap momen,
            kenangan yang tersimpan di dalamnya,
            serta berbagai hal yang selalu dapat kami ingat
            dan syukuri bersama.

        </p>

        <!-- ENVELOPE -->

        <div
            id="envelopeSection">

            <div
                class="relative mx-auto w-[320px] h-[220px]">

                <div
                    class="absolute bottom-0 left-0 right-0 h-[150px] bg-[#F5E7C3] rounded-2xl shadow-xl">
                </div>

                <div
                    class="absolute left-1/2 -translate-x-1/2 bottom-[50px] w-16 h-16 rounded-full bg-[#D4AF37] text-white flex items-center justify-center font-bold shadow-lg text-lg">

                    71

                </div>

            </div>

            <button
                onclick="openLetter()"
                class="mt-8 bg-[#1F4D3A] hover:bg-[#173a2d] text-white px-8 py-4 rounded-xl shadow-lg transition">

                Buka Surat

            </button>

        </div>

        <!-- LETTER -->

        <div
            id="letterSection"
            class="hidden">

            <div
                class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 max-w-3xl mx-auto text-left">

                <h2
                    class="text-center text-4xl text-[#1F4D3A] font-bold mb-8"
                    style="font-family:'Cormorant Garamond', serif;">

                    Selamat Ulang Tahun ke-71

                </h2>

                <div
                    class="text-gray-700 leading-9 text-lg">

                    <p class="mb-6">
                        Halo Papa Toon,
                    </p>

                    <p class="mb-6">
                        Thank you yaa sudah luangin waktu sebentar
                        buat buka surat virtual ini.
                    </p>

                    <p class="mb-6">
                        Website kecil ini Shirleen buat sebagai hadiah sederhana
                        untuk Papa Toon.
                        Semoga Papa Toon dan Mama Nina bisa menyimpannya
                        sebagai salah satu kenangan di tahun bertambahnya
                        usia Papa Toon.
                    </p>

                    <p class="mb-6">
                        Mungkin website ini nggak sempurna,
                        tapi Shirleen buat dengan banyak cinta
                        dan rasa syukur karena sudah punya
                        Papa Toon dan Mama Nina dalam hidup Shirleen.
                    </p>

                    <p class="mb-6">
                        Di dalam website ini ada berbagai foto,
                        cerita di balik foto-foto tersebut,
                        kenangan yang tersimpan di dalamnya,
                        serta momen-momen yang selalu dapat
                        kita ingat dan syukuri bersama.
                    </p>

                    <p class="mb-6">
                        Soo, I hope you both enjoy it untuk
                        halaman-halaman selanjutnya,
                        dan semoga website kecil ini bisa menjadi
                        kenangan manis yang selalu diingat.
                        Hehehe.
                    </p>

                    <p class="mb-6">
                        With love,
                    </p>

                    <p
                        class="font-semibold text-[#1F4D3A] text-xl">

                        Shirleen ❤️

                    </p>

                </div>

            </div>

            <div
                class="mt-10">

                <a
                    href="/calendar"
                    class="inline-block bg-[#D4AF37] hover:bg-[#c79f2f] text-white px-10 py-4 rounded-xl shadow-lg transition">

                    Lanjut ke Kalender →

                </a>

            </div>

        </div>

    </div>

</section>

<audio id="bgMusic" loop>
    <source src="/music/dancing-queen.mp3" type="audio/mpeg">
</audio>

<button
    id="musicBtn"
    onclick="toggleMusic()"
    class="fixed bottom-5 right-5 bg-white shadow-xl rounded-full px-4 py-3 text-sm text-[#1F4D3A] font-medium z-50">

    🎵 Putar Musik

</button>

<script>

function openLetter()
{
    document
        .getElementById('envelopeSection')
        .classList
        .add('hidden');

    document
        .getElementById('letterSection')
        .classList
        .remove('hidden');

    const music =
        document.getElementById('bgMusic');

    music.volume = 0.25;

    music.play();

    localStorage.setItem(
        'musicEnabled',
        'true'
    );

    document
        .getElementById('musicBtn')
        .innerHTML =
        '🔊 Musik Menyala';

    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

function toggleMusic()
{
    const music =
        document.getElementById('bgMusic');

    const button =
        document.getElementById('musicBtn');

    if(music.paused)
    {
        music.play();

        localStorage.setItem(
            'musicEnabled',
            'true'
        );

        button.innerHTML =
            '🔊 Musik Menyala';
    }
    else
    {
        music.pause();

        localStorage.setItem(
            'musicEnabled',
            'false'
        );

        button.innerHTML =
            '🔇 Musik Mati';
    }
}

window.addEventListener(
    'load',
    () =>
    {
        const music =
            document.getElementById('bgMusic');

        if(
            localStorage.getItem(
                'musicEnabled'
            ) === 'true'
        )
        {
            music.volume = 0.25;

            music.play().catch(() => {});

            document
                .getElementById('musicBtn')
                .innerHTML =
                '🔊 Musik Menyala';
        }
    }
);

</script>

</body>
</html>