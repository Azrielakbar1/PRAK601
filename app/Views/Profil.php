<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Lengkap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased min-h-screen flex flex-col">

<nav class="w-full px-6 py-10 flex justify-center space-x-12 font-bold text-lg">
    <a href="/PRAK601/public/beranda" class="text-gray-400 hover:text-black transition-colors">beranda</a>
    <a href="/PRAK601/public/profil" class="text-black">profil</a>
</nav>

<main class="flex-grow w-full max-w-4xl mx-auto px-6 py-12 md:py-20">

    <h1 class="text-5xl md:text-6xl font-extrabold leading-tight tracking-tight mb-16 border-b-4 border-black pb-6 inline-block">
        Profil Ulun.
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-16 text-lg md:text-xl">

        <div class="flex flex-col">
            <span class="text-gray-400 font-bold mb-1 uppercase tracking-wider text-sm">Nama Lengkap</span>
            <span class="font-semibold text-2xl"><?= $profil['nama'] ?></span>
        </div>

        <div class="flex flex-col">
            <span class="text-gray-400 font-bold mb-1 uppercase tracking-wider text-sm">Nomor Induk Mahasiswa</span>
            <span class="font-semibold text-2xl"><?= $profil['nim'] ?></span>
        </div>

        <div class="flex flex-col">
            <span class="text-gray-400 font-bold mb-1 uppercase tracking-wider text-sm">Asal Program Studi</span>
            <span class="font-semibold text-2xl"><?= $profil['prodi'] ?></span>
        </div>

        <div class="flex flex-col">
            <span class="text-gray-400 font-bold mb-1 uppercase tracking-wider text-sm">Hobi</span>
            <span class="font-semibold text-2xl"><?= $profil['hobi'] ?></span>
        </div>

        <div class="flex flex-col md:col-span-2">
            <span class="text-gray-400 font-bold mb-1 uppercase tracking-wider text-sm">Skill</span>
            <span class="font-semibold text-2xl"><?= $profil['skill'] ?></span>
        </div>

    </div>

</main>

</body>
</html>