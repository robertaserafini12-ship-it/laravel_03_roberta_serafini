<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blog - Homepage</title>
</head>
<body>
    <nav>
        <a href="{{ route('homepage') }}">Home</a> | 
        <a href="{{ route('articles.index') }}">Tutti gli Articoli</a>
    </nav>
    <hr>
    <h1>Benvenuti nel mio Blog</h1>
    <p>Scopri i nostri ultimi articoli nella sezione dedicata.</p>
</body>
</html>
