<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Dati fittizi degli articoli (Business Logic)
    private $articles = [
        [
            'id' => 1,
            'title' => 'Primo Articolo del Blog',
            'category' => 'Programmazione',
            'content' => 'Questo è il contenuto del primo articolo del blog creato con Laravel.'
        ],
        [
            'id' => 2,
            'title' => 'Guida a Laravel e ai Controller',
            'category' => 'Tutorial',
            'content' => 'I controller permettono di separare la logica dell applicazione dalle rotte.'
        ],
        [
            'id' => 3,
            'title' => 'Rotta Parametrica in Azione',
            'category' => 'Laravel',
            'content' => 'Grazie alle rotte parametriche possiamo mostrare i dettagli di ogni singolo articolo.'
        ],
    ];

    // 1. Homepage
    public function homepage()
    {
        return view('welcome');
    }

    // 2. Pagina Indice (Tutti gli articoli)
    public function index()
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    // 3. Pagina Dettaglio
    public function show($id)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return view('articles.show', ['article' => $article]);
            }
        }

        abort(404);
    }
}