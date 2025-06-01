<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid d-flex justify-content-between align-items-center position-relative mt-3">
                <button class="btn" type="button" onclick="location.href='?c=AppController&m=list'">Kembali</button>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <span class="fw-bold">Nama Item</span>
                </div>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="m-3">
        <div class="d-flex justify-content-between mt-4 mb-2">
            <span class="border-label d-flex justify-content-center align-items-center">Deskripsi Singkat</span>
            <span class="border-label d-flex justify-content-center align-items-center">Harga</span>
        </div>
        <p>
            Deskripsi singkat item menu disini ya <br>
            Rasa, tekstur, keunikan, dan lain sebagainya
        </p>
        <span class="border-label d-flex justify-content-center align-items-center mt-4 mb-2">Bahan-bahan</span>
        <p>
            bahan-bahan disini <br> 
            bahan a <br>
            bahan b
        </p>
        <div>
            <p>Direkomendasikan:</p>
            <p>Durasi Persiapan:</p>
            <p>Stok Tersedia:</p>
        </div>

        <div class="d-flex justify-content-center align-items-center mt-4">
            <button type="button" class="btn btn-secondary" onclick="location.href='?c=AppController&m=edit'">Edit Stok</button>
        </div>
        </div>
    </div>
</body>
</html>