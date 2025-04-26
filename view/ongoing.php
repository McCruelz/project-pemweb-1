<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Ongoing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-[480px] mx-auto bg-white h-screen shadow-md relative overflow-hidden">
        <div class="flex items-center p-4 border-b border-gray-200 bg-white">
            <div class="text-2xl mr-4 cursor-pointer" onclick="goBack()">&#10094;</div>
            <div class="flex-grow text-center text-lg font-bold">Pesanan Ongoing</div>
            <div class="text-xl cursor-pointer" onclick="toggleSidebar()">&#9776;</div>
        </div>

        <div class="p-4">
            <a href="pesanan.php">
                <div class="bg-gray-100 rounded-lg p-5 mb-4 border border-gray-200 text-center font-medium w-full cursor-pointer hover:bg-gray-400">
                    Pesanan 1
                </div>
            </a>

            <a href="pesanan.php">
                <div class="bg-gray-100 rounded-lg p-5 mb-4 border border-gray-200 text-center font-medium w-full cursor-pointer hover:bg-gray-400">
                    Pesanan 2
                </div>
            </a>

            <a href="pesanan.php">
                <div class="bg-gray-100 rounded-lg p-5 mb-4 border border-gray-200 text-center font-medium w-full cursor-pointer hover:bg-gray-400">
                    Pesanan 3
                </div>
            </a>
        </div>

        <div id="sidebar" class="absolute top-0 right-0 h-full w-3/4 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-lg font-bold">Menu</h2>
                <button class="text-2xl cursor-pointer" onclick="toggleSidebar()">&times;</button>
            </div>
            <div class="p-4">
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Stok Menu</a>
                    </li>
                    <li class="mb-2">
                        <a href="ongoing.php" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Pesanan Ongoing</a>
                    </li>
                    <li class="mb-2">
                        <a href="riwayat.php" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Riwayat Pesanan</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="sidebarOverlay" class="hidden absolute inset-0 bg-black bg-opacity-50 z-40" onclick="toggleSidebar()"></div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            sidebar.classList.toggle('translate-x-full');
            sidebar.classList.toggle('translate-x-0');

            sidebarOverlay.classList.toggle('hidden');
        }

        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>