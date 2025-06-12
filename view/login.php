<!-- views/login.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-[480px] mx-auto bg-white h-screen shadow-md relative overflow-hidden">
        <div class="flex justify-center items-center min-h-screen">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                <h2 class="text-2xl font-semibold mb-6 text-center">Login Admin</h2>

                <!-- Tampilkan pesan error jika login gagal -->
                <?php if (isset($error)) { ?>
                    <div class="bg-red-500 text-white p-2 rounded mb-4 text-center">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="POST" action="index.php?c=Admin&m=login">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username" name="username" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required />
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required />
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
