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
        <div class="text-2xl mr-4 cursor-pointer" onclick="location.href='?c=Admin&m=list&category_id=<?= $items['category_id']?>'">&#10094;</div>
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
        <p><span class="font-semibold">Direkomendasikan:</span> <?= $items['recommended'] ?></p>
        <p><span class="font-semibold">Durasi Persiapan:</span> <?= $items['preparation_time'] ?></p>
        <p><span class="font-semibold">Stok Tersedia:</span> <?= number_format($items['stock']) ?></p>
    </div>

    <div class="flex justify-center items-center mt-4">
        <button 
            type="button" 
            class="custom px-5 py-2 rounded"
            onclick="location.href='?c=Admin&m=edit&item_id=<?= $items['item_id']?>'">
            Edit Stok
        </button>
    </div>

    <div id="infoSuccess" class="absolute inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center px-4 py-6 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-sm mx-auto">
            <div class="flex justify-between items-center border-b p-4">
                <h2 class="text-lg font-semibold">Informasi</h2>
                <button onclick="closeModal('infoSuccess')" class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
            </div>
            <div class="p-5 text-center">
                <div class="w-16 h-16 mb-3 flex items-center justify-center mx-auto bg-green-100 text-green-600 rounded-full text-3xl">
                    ✓
                </div>
                <p class="text-gray-700">Jumlah stok berhasil diperbarui!</p>
            </div>
            <div class="flex justify-end px-4 py-3 border-t">
                <button onclick="closeModal('infoSuccess')" class="custom px-4 py-2 rounded">Oke</button>
            </div>
        </div>
    </div>

    <div id="infoError" class="absolute inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center px-4 py-6 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-sm mx-auto">
            <div class="flex justify-between items-center border-b p-4">
                <h2 class="text-lg font-semibold">Informasi</h2>
                <button onclick="closeModal('infoError')" class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
            </div>
            <div class="p-5 text-center">
                <div class="w-16 h-16 mb-3 flex items-center justify-center mx-auto bg-red-100 text-red-600 rounded-full text-3xl">
                    ✕
                </div>
                <p class="text-gray-700">Gagal memperbarui jumlah stok!</p>
            </div>
            <div class="flex justify-end px-4 py-3 border-t">
                <button onclick="closeModal('infoError')" class="custom px-4 py-2 rounded">Tutup</button>
            </div>
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

    function showModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    window.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams(window.location.search);
        if (params.get('updated') === '1') {
            showModal('infoSuccess');
        } else if (params.get('error') === '0') {
            showModal('infoError');
        }
    });
</script>
</body>
</html>