<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
        <nav class="navbar">
            <img src="banner.png">
            <div class="container-fluid justify-content-end">
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
        <nav class="navbar">
            <div class="container-fluid">
              <form class="d-flex w-100 gap-2" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </form>
            </div>
          </nav>
        <div class="m-3">
        <p class="mt-4 fw-bold">Kategori</p>
        <div class="d-grid gap-4">
            <button class="btn btn-secondary custom-height" onclick="location.href='?c=AppController&m=list'">
                <img src="icon.png">
                Kategori 1
            </button>
            <button class="btn btn-secondary custom-height" onclick="location.href='?c=AppController&m=list'">
                <img src="icon.png">
                Kategori 2
            </button>
            <button class="btn btn-secondary custom-height" onclick="location.href='?c=AppController&m=list'">
                <img src="icon.png">
                Kategori 3
            </button>
        </div>
        </div>
    </div>
</body>
</html>