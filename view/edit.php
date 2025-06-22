<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container m-6">
    <div class="flex items-center mb-8 p-1">
        <div class="text-2xl mr-4 cursor-pointer" onclick="location.href='?c=Admin&m=detail&item_id=<?= $items['item_id']?>'">&#10094;</div>
        <div class="flex-grow text-center text-lg font-bold"><?= $items['name'] ?></div>
        <div class="text-xl cursor-pointer" onclick="toggleSidebar()">&#9776;</div>
    </div>

    <div class="flex justify-between mt-4 mb-2">
        <span class="custom-2 inline-block w-36 border px-3 py-2 flex items-center text-sm font-medium text-black rounded">Deskripsi Singkat</span>
        <span class="custom-2 inline-block w-36 border py-2 flex items-center justify-center text-sm font-medium text-black rounded">
            Rp <?= number_format($items['price'], 0, ',', '.') ?>
        </span>
    </div>
    <p class="text-gray-700 text-sm mb-4"><?= $items['description'] ?></p>
    <span class="custom-2 inline-block w-36 border px-3 py-2 mb-2 flex items-center text-sm font-medium text-black rounded">Bahan-bahan</span>
    <p class="text-gray-700 text-sm mb-4"><?= $items['ingredients'] ?></p>

    <div class="text-sm text-gray-700 space-y-1">
        <p><span class="font-semibold">Stok Tersedia:</span> <?= number_format($items['stock']) ?></p>
    </div>

    <form method="post" action="?c=Admin&m=update&item_id=<?= $items['item_id'] ?>">
        <input type="hidden" name="item_id" value="<?= $items['item_id'] ?>">
        <div class="flex justify-center items-center gap-3 mt-4">
            <button type="button" class="custom rounded-full w-10 h-10 text-xl flex items-center justify-center" id="minusBtn">−</button>
            <input id="stokInput" name="stock" class="text-center border border-gray-300 rounded px-3 py-2 w-20" value="<?= $items['stock'] ?>" />
            <button type="button" class="custom rounded-full w-10 h-10 text-xl flex items-center justify-center" id="plusBtn">+</button>
        </div>
        <p class="mt-4 font-bold">Simpan jumlah stok terbaru?</p>
        <div class="flex justify-end gap-3 mt-3">
            <button type="button" class="bg-gray-200 hover:bg-gray-400 px-4 py-2 rounded" onclick="location.href='?c=Admin&m=detail&item_id=<?= $items['item_id']?>'">Batal</button>
            <button type="submit" class="custom px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
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

    document.getElementById('plusBtn').addEventListener('click', function () {
        const input = document.getElementById('stokInput');
        input.value = parseInt(input.value || 0) + 1;
    });

    document.getElementById('minusBtn').addEventListener('click', function () {
        const input = document.getElementById('stokInput');
        const current = parseInt(input.value || 0);
        if (current > 0) input.value = current - 1;
    });
</script>
</body>
</html>