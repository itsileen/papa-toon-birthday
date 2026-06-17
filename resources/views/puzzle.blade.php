<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Kenangan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body
    class="bg-[#F8F5EF] text-gray-800"
    style="font-family:Poppins,sans-serif;">

<section class="min-h-screen flex items-center justify-center px-4 md:px-6 py-12 md:py-20">

    <div class="w-full max-w-5xl mx-auto text-center">

        <div
            class="inline-block px-4 py-2 rounded-full bg-[#F5EBD2] text-[#A16A00] text-sm mb-6">

            Ice Breaking Dulu 🤭

        </div>

        <h1
            class="text-4xl md:text-6xl font-bold text-[#1F4D3A] mb-4"
            style="font-family:'Cormorant Garamond', serif;">

            Tebak Siapa Ini?

        </h1>

        <p
            class="max-w-2xl mx-auto text-gray-600 leading-8 mb-8">

         Sebelum lanjut ke halaman berikutnya, mau main puzzle dulu nggak? Hehe. Sebagai ice breaking dulu, kira-kira siapa ya yang ada di balik foto ini? 😊
        </p>

        <div class="mb-8 text-[#1F4D3A] font-medium text-lg">

            Langkah:
            <span id="moves">0</span>

        </div>

        <div
            id="puzzle"
            class="
            mx-auto
            grid
            grid-cols-3
            gap-2
            bg-white
            p-2 md:p-3
            rounded-3xl
            shadow-2xl
            w-full
            max-w-[500px]">
        </div>

        <div class="mt-10 flex flex-col items-center gap-4">

            <div class="flex flex-col sm:flex-row justify-center gap-4">

                <a
                    href="/calendar"
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
                    href="/gallery"
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

            <p class="text-sm text-gray-500">
                Kalau sudah tahu siapa orangnya sebelum puzzle selesai, berarti Papa Toon memang mudah dikenali 😆
            </p>

        </div>

        <div
            id="success"
            class="hidden mt-10">

            <h2 class="text-3xl font-bold text-[#1F4D3A] mb-3">
                🎉 Puzzle Selesai
            </h2>

            <p class="text-gray-600">
                Sosok yang selalu menjadi bagian penting dalam cerita keluarga.
            </p>

        </div>

    </div>

</section>

<script>

const puzzle = document.getElementById('puzzle');

const SIZE = 3;

let moves = 0;

let board = [
    1,2,3,
    4,5,6,
    7,8,0
];

function getNeighbors(index)
{
    const row = Math.floor(index / SIZE);
    const col = index % SIZE;

    const result = [];

    if(row > 0)
        result.push(index - SIZE);

    if(row < SIZE - 1)
        result.push(index + SIZE);

    if(col > 0)
        result.push(index - 1);

    if(col < SIZE - 1)
        result.push(index + 1);

    return result;
}

function shuffle()
{
    for(let i = 0; i < 300; i++)
    {
        const empty = board.indexOf(0);

        const neighbors = getNeighbors(empty);

        const random =
            neighbors[
                Math.floor(
                    Math.random() * neighbors.length
                )
            ];

        [board[empty], board[random]] =
        [board[random], board[empty]];
    }
}

function render()
{
    puzzle.innerHTML = '';

    const puzzleWidth =
        window.innerWidth < 768
        ? Math.min(window.innerWidth - 40, 500)
        : 500;

    board.forEach((value,index)=>{

        const tile =
            document.createElement('div');

        tile.className =
            'relative aspect-square rounded-xl overflow-hidden shadow';

        if(value === 0)
        {
            tile.className +=
                ' border-2 border-dashed border-gray-300 bg-white';
        }
        else
        {
            const piece = value - 1;

            const row =
                Math.floor(piece / 3);

            const col =
                piece % 3;

            tile.style.backgroundImage =
                "url('/images/om.jpeg')";

            tile.style.backgroundRepeat =
                'no-repeat';

            tile.style.backgroundSize =
                `${puzzleWidth}px ${puzzleWidth * 1.3}px`;

            tile.style.backgroundPosition =
                `${-col * (puzzleWidth / 3)}px ${-row * ((puzzleWidth * 1.3) / 3)}px`;

            tile.style.cursor =
                'pointer';

            tile.onclick =
                ()=>move(index);
        }

        puzzle.appendChild(tile);

    });
}

function move(index)
{
    const empty =
        board.indexOf(0);

    const neighbors =
        getNeighbors(empty);

    if(neighbors.includes(index))
    {
        [board[index], board[empty]] =
        [board[empty], board[index]];

        moves++;

        document
            .getElementById('moves')
            .innerText = moves;

        render();

        checkWin();
    }
}

function checkWin()
{
    const solved = [
        1,2,3,
        4,5,6,
        7,8,0
    ];

    if(
        JSON.stringify(board)
        ===
        JSON.stringify(solved)
    )
    {
        document
            .getElementById('success')
            .classList
            .remove('hidden');
    }
}

window.addEventListener('resize', render);

shuffle();
render();

</script>
</body>
</html>