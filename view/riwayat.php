<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-100 min-h-screen">
    <div class="max-w-[480px] mx-auto bg-white h-screen shadow-2xl relative overflow-hidden">
        <!-- Header with gradient background -->
        <div class="flex items-center p-4 border-b border-gray-200 bg-teal-500 text-white relative z-30 shadow-lg">
            <div class="text-2xl mr-4 cursor-pointer hover:bg-white hover:bg-opacity-20 rounded-full p-2 transition-all duration-200" onclick="window.history.back()">&#10094;</div>
            <div class="flex-grow text-center text-lg font-bold">Riwayat Pesanan</div>
            <div class="text-xl cursor-pointer hover:bg-white hover:bg-opacity-20 rounded-full p-2 transition-all duration-200" onclick="toggleSidebar()">&#9776;</div>
        </div>

        <!-- Enhanced Filter Section -->
        <div class="p-4 border-b border-gray-200 bg-gradient-to-r from-white to-gray-50 shadow-sm">
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                </svg>
                <span class="text-sm font-medium text-gray-700">Filter Periode:</span>
            </div>
            <div class="flex space-x-2 overflow-x-auto pb-2">
                <button onclick="filterRiwayat('all')" 
                        class="filter-btn bg-teal-500 text-white px-6 py-3 rounded-xl text-sm font-medium whitespace-nowrap shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                        Semua
                </button>
                <button onclick="filterRiwayat('1day')" 
                        class="filter-btn bg-white border border-gray-200 text-gray-700 px-6 py-3 rounded-xl text-sm font-medium whitespace-nowrap shadow-sm hover:shadow-md hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all duration-200">
                        Harian
                </button>
                <button onclick="filterRiwayat('1week')" 
                        class="filter-btn bg-white border border-gray-200 text-gray-700 px-6 py-3 rounded-xl text-sm font-medium whitespace-nowrap shadow-sm hover:shadow-md hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all duration-200">
                        Mingguan
                </button>
                <button onclick="filterRiwayat('1month')" 
                        class="filter-btn bg-white border border-gray-200 text-gray-700 px-6 py-3 rounded-xl text-sm font-medium whitespace-nowrap shadow-sm hover:shadow-md hover:bg-gray-50 transform hover:-translate-y-0.5 transition-all duration-200">
                        Bulanan
                </button>
            </div>
        </div>

        <div class="p-6 bg-gradient-to-b from-gray-50 to-white relative overflow-y-auto" style="height: calc(100vh - 180px);">
            <!-- Loading State -->
            <div id="loading" class="hidden text-center py-16">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <div class="text-gray-600 font-medium">Memuat data...</div>
                <div class="text-sm text-gray-500 mt-1">Mohon tunggu sebentar</div>
            </div>
            
            <!-- Order Cards Container -->
            <div id="pesanan-container">
                <?php foreach ($pesanan as $item): ?>
                    <a href="index.php?c=Admin&m=riwayatPesanan&id=<?= $item['order_id'] ?>">
                        <div class="bg-gradient-to-r from-white to-green-50 rounded-xl p-6 mb-4 border-l-4 border-green-500 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4 shadow-md">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800 text-lg group-hover:text-green-600 transition-colors duration-200">
                                            Pesanan #<?= $item['order_id'] ?>
                                        </div>
                                        <div class="font-medium text-gray-700 mt-1">
                                            <?php echo $item['customer_name'] ?>
                                        </div>
                                        <div class="text-sm text-gray-500 mt-2 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <?= date('d/m/Y H:i', strtotime($item['order_time'])) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-gray-400 group-hover:text-green-500 group-hover:translate-x-1 transition-all duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="mt-4 flex justify-between items-center">
                                <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium border border-green-200">
                                    <div class="w-1.5 h-1.5 bg-green-500 rounded-full mr-2"></div>
                                    Selesai
                                </div>
                                <div class="text-xs text-gray-400">
                                    Klik untuk detail
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- No Data State -->
            <div id="no-data" class="hidden text-center py-16">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Tidak Ada Data</h3>
                <p class="text-gray-500 text-sm">Tidak ada pesanan untuk periode yang dipilih</p>
            </div>

            <!-- Empty state for initial load -->
            <?php if (empty($pesanan)): ?>
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Belum Ada Riwayat</h3>
                    <p class="text-gray-500 text-sm">Riwayat pesanan akan muncul di sini setelah ada pesanan yang selesai</p>
                </div>
            <?php endif; ?>
        </div>

        <?php include 'view/templates/sidebar.php'; ?>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            sidebar.classList.toggle('translate-x-full');
            sidebar.classList.toggle('translate-x-0');

            sidebarOverlay.classList.toggle('hidden');
        }

        function filterRiwayat(period) {
            // Update button styles
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('bg-teal-500' , 'text-white');
                btn.classList.add('bg-white', 'border', 'border-gray-200', 'text-gray-700');
            });
            
            event.target.classList.remove('bg-white', 'border', 'border-gray-200', 'text-gray-700');
            event.target.classList.add('bg-teal-500', 'text-white');

            // Show loading
            document.getElementById('loading').classList.remove('hidden');
            document.getElementById('pesanan-container').classList.add('hidden');
            document.getElementById('no-data').classList.add('hidden');

            // Make AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `index.php?c=Admin&m=getRiwayatFiltered&filter=${period}`, true);
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    document.getElementById('loading').classList.add('hidden');
                    
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        const container = document.getElementById('pesanan-container');
                        
                        if (response.length > 0) {
                            let html = '';
                            response.forEach(item => {
                                const orderDate = new Date(item.order_time);
                                const formattedDate = orderDate.toLocaleDateString('id-ID') + ' ' + 
                                                   orderDate.toLocaleTimeString('id-ID', {hour: '2-digit', minute: '2-digit'});
                                
                                html += `
                                    <a href="index.php?c=Admin&m=riwayatPesanan&id=${item.order_id}">
                                        <div class="bg-gradient-to-r from-white to-green-50 rounded-xl p-6 mb-4 border-l-4 border-green-500 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4 shadow-md">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="font-semibold text-gray-800 text-lg group-hover:text-green-600 transition-colors duration-200">
                                                            Pesanan #${item.order_id}
                                                        </div>
                                                        <div class="font-medium text-gray-700 mt-1">
                                                            ${item.customer_name}
                                                        </div>
                                                        <div class="text-sm text-gray-500 mt-2 flex items-center">
                                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                            ${formattedDate}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-gray-400 group-hover:text-green-500 group-hover:translate-x-1 transition-all duration-200">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="mt-4 flex justify-between items-center">
                                                <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium border border-green-200">
                                                    <div class="w-1.5 h-1.5 bg-green-500 rounded-full mr-2"></div>
                                                    Selesai
                                                </div>
                                                <div class="text-xs text-gray-400">
                                                    Klik untuk detail
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                `;
                            });
                            container.innerHTML = html;
                            container.classList.remove('hidden');
                        } else {
                            document.getElementById('no-data').classList.remove('hidden');
                        }
                    } else {
                        container.innerHTML = '<div class="text-center py-16"><div class="w-16 h-16 bg-gradient-to-br from-red-100 to-red-200 rounded-full flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div><div class="text-red-600 font-medium">Terjadi Kesalahan</div><div class="text-sm text-gray-500 mt-1">Gagal memuat data riwayat</div></div>';
                        container.classList.remove('hidden');
                    }
                }
            };
            
            xhr.send();
        }
    </script>
</body>

</html>