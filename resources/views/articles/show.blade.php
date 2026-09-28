<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
</head>
<body>
    <nav>
        <a href="{{ route('homepage') }}">Home</a> | 
        <a href="{{ route('articles.index') }}">Tutti gli Articoli</a>
    </nav>
    <hr>
    <a href="{{ route('articles.index') }}">&larr; Torna agli articoli</a>

    <h1>{{ $article['title'] }}</h1>
    <p><em>Categoria: {{ $article['category'] }}</em></p>
    <p>{{ $article['content'] }}</p>
</body>
</html>