<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blog - Tutti gli Articoli</title>
</head>
<body>
    <nav>
        <a href="{{ route('homepage') }}">Home</a> | 
        <a href="{{ route('articles.index') }}">Tutti gli Articoli</a>
    </nav>
    <hr>
    <h1>Elenco Articoli</h1>

    <ul>
        @foreach($articles as $article)
            <li>
                <h3>{{ $article['title'] }}</h3>
                <p>Categoria: {{ $article['category'] }}</p>
                <a href="{{ route('articles.show', ['id' => $article['id']]) }}">Leggi Articolo</a>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>