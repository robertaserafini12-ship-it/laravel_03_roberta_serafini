<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article['title'] }}</title>
    <!-- Importazione CDN di Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar Elegante in alto -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">Il mio Blog</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                <a class="nav-link active" href="{{ route('articles.index') }}">Tutti gli Articoli</a>
            </div>
        </div>
    </nav>

    <!-- Contenuto Articolo centrato -->
    <div class="container py-5">

        <!-- Pulsante Torna agli articoli -->
        <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary mb-4 btn-sm rounded-pill px-3">
            &larr; Torna agli articoli
        </a>

        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <!-- Card stilizzata per l'articolo -->
                <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-4">

                    <!-- Badge Categoria -->
                    <div class="mb-3">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-semibold">
                            Categoria: {{ $article['category'] }}
                        </span>
                    </div>

                    <!-- Titolo dell'articolo -->
                    <h1 class="display-6 fw-bold text-dark mb-4">
                        {{ $article['title'] }}
                    </h1>

                    <hr class="text-secondary opacity-25 mb-4">

                    <!-- Contenuto (body) dell'articolo -->
                    <p class="fs-5 text-secondary lh-lg mb-0">
                        {{ $article['body'] }}
                    </p>

                </div>
            </div>
        </div>

    </div>

    <!-- Script JS di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>