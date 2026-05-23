<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController
{
    /**
     * Page d'accueil du blog.
     * Oriente l'utilisateur vers la vue principale (index).
     *
     * @return \Illuminate\View\View
     */
    public function index() 
    {
        return view('posts.index');
    }

    /**
     * Liste complète des articles.
     *
     * @return \Illuminate\View\View
     */
    public function articles() 
    {
        return view('posts.articles');
    }

    /**
     * Affichage d'un article unique via son slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function article(string $slug) 
    {
        return view('posts.show', ['post' => $slug]);
    }

    /**
     * Page regroupant les catégories d'articles.
     *
     * @return \Illuminate\View\View
     */
    public function categories() 
    {
        return view('posts.categories');
    }

    /**
     * Page "À propos" du site.
     *
     * @return \Illuminate\View\View
     */
    public function about() 
    {
        return view('posts.about');
    }
}