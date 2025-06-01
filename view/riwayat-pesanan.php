<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan <?php echo $pesanan['id'] ?></title>
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
            <div class="text-center font-bold text-2xl mb-8">Pesanan <?php echo $pesanan['id'] ?></div>

            <div class="flex justify-between items-center mb-4">
                <div class="font-bold">Tanggal Pesanan</div>
                <div class="font-bold"><?php echo $pesanan['tanggal'] ?></div>
            </div>

            <div class="flex justify-between items-center mb-4">
                <div class="font-bold">No. Meja</div>
                <div class="font-bold"><?php echo $pesanan['meja'] ?></div>
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
                        <?php foreach ($pesanan['items'] as $item): ?>
                            <tr class="mb-4">
                                <td class="w-3/5 p-3"><?php echo $item['nama'] ?></td>
                                <td class="w-1/5 p-3 text-center"><?php echo $item['qty'] ?></td>
                                <td class="w-1/5 p-3 text-center"><?php echo $item['harga'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="flex justify-between my-6">
                    <div class="w-4/5 text-right font-bold p-3">Total Harga</div>
                    <div class="w-1/5 bg-gray-100 rounded-lg p-3 text-center font-bold"><?php echo $pesanan['total'] ?></div>
                </div>
            </div>

            <div id="hapusPesananBtn" class="bg-gray-600 rounded-lg p-3 font-bold text-white text-center cursor-pointer hover:bg-gray-500 transition-colors">
                    Hapus Pesanan
            </div>
        </div>

         <!-- Popup Hapus Pesanan -->
         <div id="hapusPopup" class="fixed bottom-0 left-0 w-full transform translate-y-full transition-transform duration-300 z-50">
            <div class="bg-white rounded-t-lg p-6 max-w-[480px] mx-auto">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-center text-xl font-bold mb-4">Hapus Pesanan?</h2>
                <div class="flex justify-between space-x-4">
                    <button id="batalkanBtn" class="flex-1 bg-gray-100 text-gray-800 py-2 rounded-lg hover:bg-gray-200 transition-colors">Tidak</button>
                    <button id="konfirmasiBtn" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors">Ya</button>
                </div>
            </div>
        </div>

        <!-- Popup Notifikasi -->
        <div id="notifikasiPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center">
            <div class="bg-white rounded-lg p-6 w-11/12 max-w-md">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h2 id="notifikasiText" class="text-center text-xl font-bold mb-4">Pesanan Dihapus</h2>
            </div>
        </div>

        <!-- Overlay -->
        <div id="overlay" class="hidden absolute inset-0 bg-black bg-opacity-50 z-40"></div>
        <?php include 'view/templates/sidebar.php'; ?>
    </div>

    <script>
        // Elemen DOM yang sering digunakan
        var elements = {
            hapusPopup: document.getElementById('hapusPopup'),
            notifikasiPopup: document.getElementById('notifikasiPopup'),
            overlay: document.getElementById('overlay'),
            hapusBtn: document.getElementById('hapusPesananBtn'),
            batalkanBtn: document.getElementById('batalkanBtn'),
            konfirmasiBtn: document.getElementById('konfirmasiBtn')
        };

        // Fungsi untuk menampilkan/menyembunyikan popup hapus
        function toggleHapusPopup(show) {
            show = show !== false; // Default true jika tidak diberikan
            
            if (show) {
                elements.hapusPopup.classList.remove('translate-y-full');
                elements.hapusPopup.classList.add('translate-y-0');
                elements.overlay.classList.remove('hidden');
            } else {
                elements.hapusPopup.classList.add('translate-y-full');
                elements.hapusPopup.classList.remove('translate-y-0');
                elements.overlay.classList.add('hidden');
            }
        }

        // Toggle sidebar
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var sidebarOverlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.toggle('translate-x-full');
            sidebar.classList.toggle('translate-x-0');
            
            sidebarOverlay.classList.toggle('hidden');
        }

        // Fungsi untuk menampilkan notifikasi dan redirect
        function hapusPesanan() {
            // Sembunyikan popup konfirmasi
            toggleHapusPopup(false);
            
            // Tampilkan notifikasi
            elements.notifikasiPopup.classList.remove('hidden');
            elements.notifikasiPopup.classList.add('flex');
            
            // Redirect setelah delay
            setTimeout(function() {
                window.location.href = 'index.php?c=Admin&m=riwayat';
            }, 1500);
        }

        // Event listeners
        elements.hapusBtn.addEventListener('click', function() {
            toggleHapusPopup(true);
        });
        
        elements.batalkanBtn.addEventListener('click', function() {
            toggleHapusPopup(false);
        });
        
        elements.konfirmasiBtn.addEventListener('click', function() {
            hapusPesanan();
        });
        
        // Event listener untuk overlay
        elements.overlay.addEventListener('click', function() {
            toggleHapusPopup(false);
        });
    </script>
</body>

</html>