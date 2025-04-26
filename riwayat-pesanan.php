<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan #01</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-[480px] mx-auto bg-white h-screen shadow-md relative overflow-hidden">
        <div class="flex items-center p-4 border-b border-gray-200 bg-white relative z-30">
            <div class="text-2xl mr-4 cursor-pointer" onclick="window.history.back()">&#10094;</div>
            <div class="flex-grow text-center text-lg font-bold">Riwayat Pesanan</div>
            <div class="text-xl cursor-pointer" onclick="toggleSidebar()">&#9776;</div>
        </div>

        <div class="p-4">
            <div class="text-center font-bold text-2xl mb-8">Pesanan #01</div>

            <div class="flex justify-between items-center mb-4">
                <div class="font-bold">Tanggal Pesanan</div>
                <div class="font-bold">12/10/2024</div>
            </div>

            <div class="flex justify-between items-center mb-4">
                <div class="font-bold">No. Meja</div>
                <div class="font-bold">8</div>
            </div>

            <div class="mt-8">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="w-3/5 font-bold p-3 text-left">Nama Menu</th>
                            <th class="w-1/5 font-bold p-3 text-center">Qty</th>
                            <th class="w-1/5 font-bold p-3 text-center">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="mb-4">
                            <td class="w-3/5 p-3">Nasi Goreng</td>
                            <td class="w-1/5 p-3 text-center">1</td>
                            <td class="w-1/5 p-3 text-center">25.000</td>
                        </tr>
                        <tr class="mb-4">
                            <td class="w-3/5 p-3">Es Teh</td>
                            <td class="w-1/5 p-3 text-center">1</td>
                            <td class="w-1/5 p-3 text-center">3.000</td>
                        </tr>
                        <tr class="mb-4">
                            <td class="w-3/5 p-3">Kerupuk</td>
                            <td class="w-1/5 p-3 text-center">2</td>
                            <td class="w-1/5 p-3 text-center">2.000</td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-between my-6">
                    <div class="w-4/5 text-right font-bold p-3">Total Harga</div>
                    <div class="w-1/5 bg-gray-100 rounded-lg p-3 text-center font-bold">30.000</div>
                </div>
            </div>

            <div class="bg-gray-600 rounded-lg p-3 font-bold text-white text-center cursor-pointer hover:bg-gray-500 transition-colors">
                Hapus Pesanan
            </div>
        </div>

        <div id="sidebar" class="absolute top-0 right-0 h-full w-3/4 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                <span class="font-bold">Menu</span>
                <button id="closeSidebar" class="text-2xl cursor-pointer" onclick="toggleSidebar()">&times;</button>
            </div>
            <nav class="p-4">
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
            </nav>
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
    </script>
</body>

</html>