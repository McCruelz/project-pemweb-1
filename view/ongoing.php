<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Ongoing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-100 min-h-screen">
    <div class="max-w-[480px] mx-auto bg-white h-screen shadow-2xl relative overflow-hidden">
        <!-- Header with solid background -->
        <div class="flex items-center p-4 border-b border-gray-200 bg-teal-500 text-white shadow-lg">
            <div class="text-2xl mr-4 cursor-pointer hover:bg-teal-700 rounded-full p-2 transition-all duration-200" onclick="goBack()">&#10094;</div>
            <div class="flex-grow text-center text-lg font-bold">Pesanan Ongoing</div>
            <div class="text-xl cursor-pointer hover:bg-teal-700 rounded-full p-2 transition-all duration-200" onclick="toggleSidebar()">&#9776;</div>
        </div>

        <!-- Content area -->
        <div class="p-6 bg-stone-100 min-h-full">
            <!-- Status indicator -->
            <div class="mb-6 text-center">
                <div class="inline-flex items-center px-4 py-2 bg-amber-100 text-amber-800 rounded-full text-sm font-medium border border-amber-200">
                    <div class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></div>
                    Pesanan Sedang Diproses
                </div>
            </div>

            <?php foreach ($pesanan as $item): ?>
                <a href="index.php?c=Admin&m=pesanan&id=<?= $item['order_id'] ?>">
                    <div class="bg-white rounded-xl p-6 mb-4 border-l-4 border-teal-600 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4 shadow-md">
                                    <?php echo strtoupper(substr($item['customer_name'], 0, 1)) ?>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 text-lg group-hover:text-teal-600 transition-colors duration-200">
                                        <?php echo $item['customer_name'] ?>
                                    </div>
                                    <div class="text-sm text-gray-500 mt-1">
                                        Order ID: #<?= $item['order_id'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="text-gray-400 group-hover:text-teal-500 group-hover:translate-x-1 transition-all duration-200">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Status badge -->
                        <div class="mt-4 flex justify-between items-center">
                            <div class="inline-flex items-center px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium border border-orange-200">
                                <div class="w-1.5 h-1.5 bg-orange-500 rounded-full mr-2"></div>
                                Dalam Proses
                            </div>
                            <div class="text-xs text-gray-400">
                                Klik untuk detail
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

            <!-- Empty state (if no orders) -->
            <?php if (empty($pesanan)): ?>
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-stone-200 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Tidak Ada Pesanan Ongoing</h3>
                    <p class="text-gray-500 text-sm">Semua pesanan telah selesai diproses</p>
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

        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>