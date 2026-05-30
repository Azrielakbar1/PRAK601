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
    <a href="/" class="text-gray-400 hover:text-black transition-colors">beranda</a>
    <a href="/profil" class="text-black">profil</a>
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

    <div class="mt-32 pt-16 border-t-4 border-black">
        <h2 class="text-4xl font-extrabold mb-12">Memories</h2>

        <div class="flex flex-col md:flex-row gap-12 items-center">

            <div class="w-full md:w-1/2">
                <div class="aspect-square bg-gray-100 rounded-3xl overflow-hidden border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] transition-all duration-300">
                    <img src="/foto-post-basket.jpg" alt="Dokumentasi Kegiatan" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <h3 class="text-3xl font-bold mb-6 leading-snug">Pekan Olahraga Teknik</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Salah satu kegiatan yang berkesan di salah satu kegiatan kampus adalah PORTEK (Pekan Olahraga Teknik) dimana bersama teman-teman bertanding dengan Program Studi Lain.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Kami melakukan latihan bersama-sama, hampir setiap minggu. Walaupun menelan kekalahan, namun memori yang dihasilkan sangat berkesan
                </p>
            </div>
        </div>
    </div>

    <footer class="w-full text-center py-10 mt-10 text-gray-400 font-semibold text-sm">
        &copy; 2026 PRAK601 - Web II
    </footer>

</main>

</body>
</html>