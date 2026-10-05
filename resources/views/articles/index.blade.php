<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Tutti gli Articoli</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary bg-opacity-10">

    <!-- Navbar / Link di navigazione -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="{{ route('homepage') }}">Il mio Blog</a>
            <div>
                <a href="{{ route('homepage') }}" class="btn btn-outline-light btn-sm me-2">Home</a>
                <a href="{{ route('articles.index') }}" class="btn btn-outline-light btn-sm">Tutti gli Articoli</a>
            </div>
        </div>
    </nav>

    <!-- Contenuto Principale con Elenco Articoli -->
    <div class="container py-4">
        <h1 class="mb-4 fw-bold text-dark border-bottom pb-2">Elenco Articoli</h1>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 h-100 bg-white rounded-4">
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 fw-bold text-primary">{{ $article['title'] }}</h3>
                            <p class="text-muted small mb-2">Categoria: <span class="badge bg-secondary">{{ $article['category'] }}</span></p>
                            <p class="text-secondary flex-grow-1">{{ Str::limit($article['body'], 60) }}</p>
                            <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-outline-primary btn-sm mt-3 fw-bold">Leggi Articolo</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>