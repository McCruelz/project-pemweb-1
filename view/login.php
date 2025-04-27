<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Helvetica, sans-serif;
    }
    .border-custom {
    width: 130px;
    height: 70px;
    margin: 0 auto;
    background-color: rgb(129, 129, 129);
    margin-bottom: 20px;
    }
</style>
<body>
<div id="my-app">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container text-center">
        <div class="border rounded d-flex justify-content-center align-items-center border-custom">
            <img src="item.png">
            Logo
        </div>
        <div>Tagline</div>
        <p>................</p>
        <button type="button" class="btn btn-secondary ">Pelanggan</button>
        <button type="button" class="btn btn-secondary" onclick="location.href='?c=AppController&m=kategori'">Admin</button>
    </div>
    </div>
</div>
</body>
</html>