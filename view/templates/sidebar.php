<div id="sidebar" class="absolute top-0 right-0 h-full w-3/4 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
            <div class="p-4 border-b border-stone-200 flex justify-between items-center bg-teal-800 text-white">
                <h2 class="text-lg font-bold">Menu</h2>
                <button class="text-2xl cursor-pointer hover:bg-teal-700 rounded-full p-1" onclick="toggleSidebar()">&times;</button>
            </div>
            <div class="p-4 bg-stone-50 h-full">
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block py-3 px-4 hover:bg-teal-100 hover:text-teal-800 rounded-lg cursor-pointer text-gray-700 font-medium">Stok Menu</a>
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
    </div>