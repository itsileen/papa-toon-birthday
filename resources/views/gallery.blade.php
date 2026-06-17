<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kenangan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body
    class="bg-[#F8F5EF] text-gray-800"
    style="font-family:Poppins,sans-serif;">

<section class="min-h-screen px-6 py-20">

    <div class="max-w-6xl mx-auto text-center">

        <div
            class="inline-block px-5 py-2 rounded-full bg-[#F5EBD2] text-[#A16A00] text-sm mb-6">

            Album Keluarga

        </div>

        <h1
            class="text-5xl md:text-6xl font-bold text-[#1F4D3A] mb-4"
            style="font-family:'Cormorant Garamond', serif;">

            Papa Toon & Mama Nina

        </h1>

        <p
            class="max-w-2xl mx-auto text-gray-600 leading-8 mb-14">

            Sherry baru sadar setelah mengumpulkan foto-fotonya, ternyata sebagian besar isinya Papa Toon dan Mama Nina berdua. Tapi ya gimana, momen-momen manis seperti ini memang sayang untuk dilewatkan.

        </p>

        <!-- GALERI -->

        <div class="gallery-grid">

            <div class="photo-card">
                <img
                    src="/images/gallery/1.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                     Aduhh, kompak betul bajunya sama 🤭
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/2.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                    My Ongkel ini lagi minum apa sih? Hehehe 🍹
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/3.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                   Vacation mode: ON ✈️
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/4.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                   Hmmm... ini lagi jalan-jalan ya? 🤔
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/5.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                     Pretty and handsome deh dua couple ini 💛
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/6.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                      Holiday di Baliii 🌴
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/7.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                    Jalan-jalan ke Central Park Jakarta ✨
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/8.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                   Onkel Toon lagi santai-santai nih hehehe 😌
                </p>
            </div>

            <div class="photo-card">
                <img
                    src="/images/gallery/9.jpeg"
                    onclick="openImage(this.src)"
                    class="photo-image">

                <p class="photo-title">
                     SMILEEEEE 📸😆
                </p>
            </div>

        </div>

        <!-- NAVIGATION -->

        <div class="mt-10 flex justify-center gap-4">

            <a
                href="/puzzle"
                class="
                px-8
                py-3
                rounded-xl
                border
                border-[#1F4D3A]
                text-[#1F4D3A]
                hover:bg-white
                transition">

                ← Sebelumnya

            </a>

            <a
                href="/video"
                class="
                px-8
                py-3
                rounded-xl
                bg-[#1F4D3A]
                text-white
                hover:bg-[#173a2d]
                transition">

                Selanjutnya →

            </a>

        </div>

    </div>

</section>

<!-- LIGHTBOX -->

<div id="imageModal" class="image-modal">

    <span
        onclick="closeImage()"
        class="close-btn">

        &times;

    </span>

    <img
        id="modalImage"
        class="modal-image">

</div>

<style>

.gallery-grid{
    max-width:1000px;
    margin:auto;
    margin-bottom:90px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:24px;
}

.photo-card{
    background:white;
    padding:12px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.photo-card:hover{
    transform:translateY(-8px);
}

.photo-image{
    width:100%;
    height:280px;
    object-fit:cover;
    border-radius:12px;
    cursor:pointer;
    display:block;
}

.photo-title{
    margin-top:12px;
    color:#1F4D3A;
    font-weight:500;
    text-align:center;
}

.image-modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.85);
    z-index:9999;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.modal-image{
    max-width:90%;
    max-height:90vh;
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,.5);
}

.close-btn{
    position:absolute;
    top:20px;
    right:35px;
    color:white;
    font-size:55px;
    cursor:pointer;
}

@media(max-width:768px){

    .gallery-grid{
        grid-template-columns:1fr;
    }

}

</style>

<script>

function openImage(src)
{
    document.getElementById('modalImage').src = src;

    document.getElementById('imageModal').style.display =
        'flex';
}

function closeImage()
{
    document.getElementById('imageModal').style.display =
        'none';
}

document
.getElementById('imageModal')
.addEventListener('click', function(e){

    if(e.target.id === 'imageModal')
    {
        closeImage();
    }

});

</script>
</body>
</html>