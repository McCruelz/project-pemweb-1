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
                <button class="btn" type="button" onclick="location.href='?c=AppController&m=detail'">Kembali</button>
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
        <p>Stok Tersedia:</p>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <button type="button" class="btn btn-secondary rounded-circle">−</button>
            <span class="border-label d-flex justify-content-center align-items-center">Jumlah</span>
            <button type="button" class="btn btn-secondary rounded-circle">+</button>
        </div>
        <p class="mt-4 fw-bold">Simpan jumlah stok terbaru?</p>
        <div class="d-flex justify-content-end gap-3">
            <button type="button" class="btn btn-secondary" onclick="location.href='?c=AppController&m=detail'">Batal</button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#info">Simpan</button>
        </div>
        </div>
        <div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered custom-small">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center flex-column text-center">
                            <p class="border-cek rounded-circle d-flex justify-content-center align-items-center">✓</p>
                            <p>Jumlah stok berhasil diperbarui!</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                        <button type="button" class="btn btn-secondary">Kembali ke Menu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>