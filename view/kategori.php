<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="m-6">
    <div class="flex items-center mb-8 p-1">
        <div class="flex-grow text-center text-lg font-bold">Kategori</div>
        <div class="text-xl cursor-pointer" onclick="toggleSidebar()">&#9776;</div>
    </div>

    <form class="flex flex-row gap-3" role="search" method="GET" action="index.php">
        <input class="basis-3/4 px-3 py-2 border border-gray-300 rounded-md" type="search" name="search_kategori" placeholder="Search" aria-label="Search">
        <input type="hidden" name="c" value="Admin">
        <input type="hidden" name="m" value="searchKategori">
        <button class="custom basis-1/4 px-4 py-2 rounded-md" type="submit">Search</button>
    </form>
    
    <div class="mt-8">
        <div class="grid gap-4">
        <?php foreach ($categories as $c): ?>
            <button
            class="relative h-24 rounded-lg overflow-hidden text-white font-bold"
            style="background-image: url('<?= $c['image'] ?>'); background-size: cover; background-position: center;"
            onclick="location.href='?c=Admin&m=list&category_id=<?= $c['category_id'] ?>'">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
            <span><?=($c['name']) ?></span>
            </div>
            </button>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<div id="sidebar" class="absolute top-0 right-0 h-full w-3/4 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
        <h2 class="text-lg font-bold">Menu</h2>
        <button class="text-2xl cursor-pointer" onclick="toggleSidebar()">&times;</button>
    </div>
    <div class="p-4">
        <ul>
            <li class="mb-2">
                <a href="index.php?c=Admin&m=kategori" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Stok Menu</a>
            </li>
            <li class="mb-2">
                <a href="index.php?c=Admin&m=ongoing" class="block py-3 px-4 hover:bg-teal-100 hover:text-teal-800 rounded-lg cursor-pointer text-gray-700 font-medium">Pesanan Ongoing</a>
            </li>
            <li class="mb-2">
                <a href="index.php?c=Admin&m=riwayat" class="block py-3 px-4 hover:bg-teal-100 hover:text-teal-800 rounded-lg cursor-pointer text-gray-700 font-medium">Riwayat Pesanan</a>
            </li>
            <li>
                <a href="index.php?c=Admin&m=logout" class="block py-3 px-4 hover:bg-red-100 hover:text-red-700 rounded-lg cursor-pointer text-gray-700 font-medium border border-red-200">Log Out</a>
            </li>
        </ul>
    </div>
</div>
<div id="sidebarOverlay" class="hidden absolute inset-0 bg-black bg-opacity-50 z-40" onclick="toggleSidebar()"></div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        sidebar.classList.toggle('translate-x-full');
        sidebar.classList.toggle('translate-x-0');

        sidebarOverlay.classList.toggle('hidden');
    }
</script>
</body>
</html>