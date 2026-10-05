<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Homepage</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info bg-opacity-10">

    <!-- Navbar / Link di navigazione -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="{{ route('homepage') }}">Il mio Blog</a>
            <div>
                <a href="{{ route('homepage') }}" class="btn btn-outline-light btn-sm me-2">Home</a>
                <a href="{{ route('articles.index') }}" class="btn btn-outline-light btn-sm">Tutti gli Articoli</a>
            </div>
        </div>
    </nav>

    <!-- Sezione Principale (Hero) con sfondo e colori curati -->
    <div class="container text-center py-5">
        <div class="p-5 mb-4 bg-white shadow rounded-4 border border-info">
            <h1 class="display-4 fw-bold text-primary mb-3">Benvenuti nel mio Blog</h1>
            <p class="lead text-secondary mb-4">Scopri i nostri ultimi articoli nella sezione dedicata.</p>
            <a href="{{ route('articles.index') }}" class="btn btn-lg btn-success fw-bold shadow-sm">Esplora gli Articoli</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>