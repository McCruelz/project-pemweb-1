<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="border rounded border-custom d-flex justify-content-center align-items-center">
            <img src="item.png">
            Logo
        </div>
        <div>Tagline</div>
        <p>................</p>
        <div class="gap-2">
        <button type="button" class="btn btn-secondary ">Pelanggan</button>
        <button type="button" class="btn btn-secondary" onclick="location.href='?c=AppController&m=kategori'">Admin</button>
        </div>
    </div>
</body>
</html>