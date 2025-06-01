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
                <a href="index.php?c=Admin&m=index" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Pesanan Ongoing</a>
            </li>
            <li class="mb-2">
                <a href="index.php?c=Admin&m=riwayat" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Riwayat Pesanan</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded cursor-pointer">Log Out</a>
            </li>
        </ul>
    </div>
</div>

<div id="sidebarOverlay" class="hidden absolute inset-0 bg-black bg-opacity-50 z-40" onclick="toggleSidebar()"></div>
