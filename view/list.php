<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="m-6">
    <div class="flex items-center mb-8 p-1">
        <div class="text-2xl mr-4 cursor-pointer" onclick="location.href='?c=Adminr&m=kategori'">&#10094;</div>
        <div class="flex-grow text-center text-lg font-bold">Item</div>
        <div class="text-xl cursor-pointer" onclick="toggleSidebar()">&#9776;</div>
    </div>

    <div class="flex flex-wrap justify-center items-center gap-5 mt-4 mb-5">
        <?php foreach ($categories as $c): ?>
            <button 
            type="button"
            class="px-4 py-2 rounded-md border transition font-medium 
            <?= (isset($_GET['category_id']) && $_GET['category_id'] == $c['category_id']) 
            ? 'custom-1' 
            : 'bg-gray-200 text-gray-700 hover:bg-gray-200' ?>"
            onclick="location.href='?c=Admin&m=list&category_id=<?= $c['category_id'] ?>'">
            <?= $c['name'] ?>
            </button>
        <?php endforeach; ?>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 justify-items-center">
        <?php foreach ($items as $i): ?>
            <div class="w-full max-w-xs">
                <div class="custom-2 border p-3 shadow-sm rounded-md flex flex-col h-full">
                    <img src="<?= $i['image']?>" 
                    alt="<?= $i['name'] ?>" 
                    class="w-full h-20 object-cover rounded mb-2">
                <div class="text-center mb-2">
                    <div class="font-semibold"><?= $i['name'] ?></div>
                    <div>Rp <?= number_format($i['price'], 0, ',', '.') ?></div>
                </div>
                <div class="mt-auto flex justify-center">
                    <button 
                        type="button" 
                        class="custom rounded-md px-4 py-2 mt-2 mb-1"
                        onclick="location.href='?c=Admin&m=detail&item_id=<?= $i['item_id'] ?>'">
                        Deskripsi
                    </button>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
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