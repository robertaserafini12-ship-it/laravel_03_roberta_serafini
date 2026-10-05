<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles = [
        [
            'id' => 1,
            'title' => 'Introduzione a Laravel',
            'body' => 'Laravel è un framework PHP moderno, elegante e ricco di strumenti potenti.',
            'category' => 'Programmazione'
        ],
        [
            'id' => 2,
            'title' => 'I Controller e la Logica',
            'body' => 'I controller ci permettono di separare la logica di business dalle rotte.',
            'category' => 'Backend'
        ],
        [
            'id' => 3,
            'title' => 'Stilare con Bootstrap 5',
            'body' => 'Grazie a Bootstrap 5 possiamo creare interfacce responsive e ordinate.',
            'category' => 'Frontend'
        ]
    ];

    public function homepage() {
        return view('welcome');
    }

    public function index() {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show($id) {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return view('articles.show', ['article' => $article]);
            }
        }
        abort(404);
    }
}