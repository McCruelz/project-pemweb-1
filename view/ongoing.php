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
            <?php foreach ($pesanan as $item): ?>
                <a href="index.php?c=Admin&m=pesanan&id=<?= $item['id'] ?>">
                    <div class="bg-gray-100 rounded-lg p-5 mb-4 border border-gray-200 text-center font-medium w-full cursor-pointer hover:bg-gray-400">
                        <?php echo $item['name'] ?>
                    </div>
                </a>
            <?php endforeach; ?>
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