<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan <?php echo $pesanan['order_id'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-100 min-h-screen">
    <div class="max-w-[480px] mx-auto bg-white min-h-screen shadow-2xl relative overflow-hidden">
        <!-- Header with solid background -->
        <div class="flex items-center p-4 bg-slate-800 text-white shadow-lg relative z-30">
            <div class="text-2xl mr-4 cursor-pointer hover:bg-white hover:bg-opacity-20 p-2 rounded-full transition-all duration-200" onclick="window.history.back()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </div>
            <div class="flex-grow text-center text-lg font-bold">Detail Pesanan</div>
            <div class="text-xl cursor-pointer hover:bg-white hover:bg-opacity-20 p-2 rounded-full transition-all duration-200" onclick="toggleSidebar()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </div>
        </div>

        <div class="p-6 overflow-y-auto pb-32">
            <!-- Order ID Card -->
            <div class="bg-slate-800 text-white rounded-2xl p-6 mb-6 shadow-lg">
                <div class="text-center">
                    <div class="text-sm opacity-90 mb-2">Pesanan</div>
                    <div class="text-3xl font-bold">#<?php echo $pesanan['order_id']?></div>
                </div>
            </div>

            <div class="space-y-4 mb-8">
                <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Status Pesanan</div>
                                <div class="font-semibold text-gray-800">Status</div>
                            </div>
                        </div>
                        <div class="bg-yellow-400 border border-yellow-500 rounded-lg px-3 py-1 text-yellow-900 font-medium text-sm">
                            <?php echo $pesanan['status'] ?>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0h6M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9a2 2 0 00-2-2h-2"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Tanggal Pesanan</div>
                                <div class="font-semibold text-gray-800"><?php echo $pesanan['order_time'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">Nama Pelanggan</div>
                                <div class="font-semibold text-gray-800"><?php echo $pesanan['customer_name'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2v14m-6-8h6m-6 4h6M5 10h2m4 0h2M5 14h2m4 0h2M5 18h2m4 0h2"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500">No. Meja</div>
                                <div class="font-semibold text-gray-800">Meja <?php echo $pesanan['table_number'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-8">
                <div class="bg-stone-100 p-4 border-b border-gray-200">
                    <h3 class="font-bold text-gray-800 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Detail Pesanan
                    </h3>
                </div>

                <div class="divide-y divide-gray-100">
                    <?php foreach ($pesanan['items'] as $index => $item): ?>
                        <div class="p-4 hover:bg-stone-50 transition-colors">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center flex-1">
                                    <div class="w-8 h-8 bg-slate-100 rounded-full flex items-center justify-center mr-3 text-slate-600 font-bold text-sm">
                                        <?php echo $index + 1 ?>
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-semibold text-gray-800 mb-1"><?php echo $item['item_name'] ?></div>
                                        <div class="text-sm text-gray-500">Qty: <?php echo $item['quantity'] ?></div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="font-bold text-slate-600">Rp <?php echo number_format($item['subtotal'], 0, ',', '.') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="bg-stone-100 p-4 border-t-2 border-stone-200">
                    <div class="flex justify-between items-center">
                        <div class="text-lg font-bold text-gray-800">Total Harga</div>
                        <div class="bg-slate-800 text-white px-4 py-2 rounded-lg font-bold text-lg">
                            Rp <?php echo number_format($pesanan['total'], 0, ',', '.') ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-4 pb-8">
                <div id="selesaikanPesananBtn" class="bg-teal-500 hover:bg-teal-600 rounded-xl p-4 font-bold text-white text-center cursor-pointer transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Tandai Selesai</span>
                </div>
                <div id="hapusPesananBtn" class="bg-red-600 hover:bg-red-700 rounded-xl p-4 font-bold text-white text-center cursor-pointer transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    <span>Hapus Pesanan</span>
                </div>
            </div>
        </div>

        <!-- Enhanced Confirmation Popup -->
        <div id="konfirmasiPopup" class="fixed bottom-0 left-0 w-full transform translate-y-full transition-transform duration-300 z-50">
            <div class="bg-white rounded-t-2xl p-6 max-w-[480px] mx-auto shadow-2xl">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-center text-xl font-bold mb-2 text-gray-800">Selesaikan Pesanan?</h2>
                <p class="text-center text-gray-600 mb-6">Pesanan akan ditandai sebagai selesai dan tidak dapat diubah kembali.</p>
                <div class="flex justify-between space-x-4">
                    <button id="batalkanBtn" class="flex-1 bg-stone-100 hover:bg-stone-200 text-gray-800 py-3 rounded-xl font-semibold transition-colors">Batal</button>
                    <button id="konfirmasiBtn" class="flex-1 bg-teal-500 hover:bg-teal-600 text-white py-3 rounded-xl font-semibold transition-colors">Ya, Selesai</button>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Delete Popup -->
        <div id="hapusPopup" class="fixed bottom-0 left-0 w-full transform translate-y-full transition-transform duration-300 z-50">
            <div class="bg-white rounded-t-2xl p-6 max-w-[480px] mx-auto shadow-2xl">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.864-.833-2.634 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-center text-xl font-bold mb-2 text-gray-800">Hapus Pesanan?</h2>
                <p class="text-center text-gray-600 mb-6">Tindakan ini tidak dapat dibatalkan. Pesanan akan dihapus secara permanen.</p>
                <div class="flex justify-between space-x-4">
                    <button id="batalkanHapusBtn" class="flex-1 bg-stone-100 hover:bg-stone-200 text-gray-800 py-3 rounded-xl font-semibold transition-colors">Batal</button>
                    <button id="hapusBtn" class="flex-1 bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold transition-colors">Ya, Hapus</button>
                </div>
            </div>
        </div>

        <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40 backdrop-blur-sm"></div>
        
        <?php include 'view/templates/sidebar.php'; ?>
    </div>

    <script>
        const elements = {
            konfirmasiPopup: document.getElementById('konfirmasiPopup'),
            hapusPopup: document.getElementById('hapusPopup'),
            overlay: document.getElementById('overlay'),
            selesaikanBtn: document.getElementById('selesaikanPesananBtn'),
            hapusBtn: document.getElementById('hapusPesananBtn')
        };

        document.getElementById('konfirmasiBtn').addEventListener('click', function() {
            window.location.href = 'index.php?c=Admin&m=konfirmasiSelesai&id=<?php echo $pesanan['order_id']; ?>';
        });

        document.getElementById('hapusBtn').addEventListener('click', function() {
            window.location.href = 'index.php?c=Admin&m=hapusPesanan&id=<?php echo $pesanan['order_id']; ?>';
        });

        function togglePopup(popupEl, show = true) {
            if (show) {
                popupEl.classList.remove('translate-y-full');
                popupEl.classList.add('translate-y-0');
                elements.overlay.classList.remove('hidden');
            } else {
                popupEl.classList.add('translate-y-full');
                popupEl.classList.remove('translate-y-0');
                elements.overlay.classList.add('hidden');
            }
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.toggle('translate-x-full');
            sidebar.classList.toggle('translate-x-0');
            
            sidebarOverlay.classList.toggle('hidden');
        }

        elements.selesaikanBtn.addEventListener('click', () => togglePopup(elements.konfirmasiPopup));
        elements.hapusBtn.addEventListener('click', () => togglePopup(elements.hapusPopup));
        
        document.getElementById('batalkanBtn').addEventListener('click', function() {
            togglePopup(elements.konfirmasiPopup, false);
        });

        document.getElementById('batalkanHapusBtn').addEventListener('click', function() {
            togglePopup(elements.hapusPopup, false);
        });

        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('batalkan-btn')) {
                const parentPopup = event.target.closest('#konfirmasiPopup, #hapusPopup');
                if (parentPopup) {
                    togglePopup(parentPopup, false);
                }
            }
        });

        elements.overlay.addEventListener('click', function() {
            togglePopup(elements.konfirmasiPopup, false);
            togglePopup(elements.hapusPopup, false);
        });
    </script>
</body>

</html>