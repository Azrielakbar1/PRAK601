<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased min-h-screen flex flex-col">

<nav class="w-full px-6 py-10 flex justify-center space-x-12 font-bold text-lg">
    <a href="/" class="text-black">beranda</a>
    <a href="/profil" class="text-gray-400 hover:text-black transition-colors">profil</a>
</nav>

<main class="flex-grow w-full max-w-6xl mx-auto px-6 py-12 md:py-20 flex flex-col md:flex-row items-center gap-16">

    <div class="md:w-1/2">
        <h1 class="text-6xl md:text-7xl font-extrabold leading-tight tracking-tight mb-8">
            Muhammad<br>Azriel Akbar
        </h1>
        <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-normal">
            Assalamualaikum Team, ulun dari Program Studi <strong class="text-black"><?= $profil['prodi'] ?></strong>. NIM ulun <strong class="text-black"><?= $profil['nim'] ?></strong>.
        </p>
        <div class="mt-10">
            <a href="/profil" class="inline-block bg-black text-white font-bold py-4 px-10 rounded-full hover:bg-gray-800 transition-transform hover:-translate-y-1">
                Profil Ulun
            </a>
        </div>
    </div>

    <div class="md:w-1/2 flex justify-center">
        <div class="grid grid-cols-4 gap-3 w-72 h-72 md:w-96 md:h-96">
            <div class="bg-blue-600 rounded-tl-full"></div>
            <div class="bg-yellow-400 rounded-full"></div>
            <div class="bg-emerald-500 rounded-br-full"></div>
            <div class="bg-rose-500 rounded-tr-full"></div>

            <div class="bg-gray-900 rounded-bl-full"></div>
            <div class="bg-blue-300 rounded-full"></div>
            <div class="bg-rose-300 rounded-tl-full"></div>
            <div class="bg-yellow-200"></div>

            <div class="bg-emerald-300 rounded-br-full"></div>
            <div class="bg-blue-500 rounded-full"></div>
            <div class="bg-gray-200"></div>
            <div class="bg-rose-400 rounded-tr-full"></div>

            <div class="bg-yellow-500 rounded-full"></div>
            <div class="bg-emerald-400 rounded-bl-full"></div>
            <div class="bg-blue-400 rounded-br-full"></div>
            <div class="bg-gray-900 rounded-full"></div>
        </div>
    </div>

</main>

</body>
</html>