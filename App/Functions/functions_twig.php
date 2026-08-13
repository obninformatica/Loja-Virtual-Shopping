<?php

use App\Repositories\Site\CategoriaRepository;

$site_url = new \Twig\TwigFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'];
});

// Listar as categorias np left menu
$categorias = new \Twig\TwigFunction('categorias', function(){
    $categoriaRepository = new CategoriaRepository();
    return $categoriaRepository->listarCategoriasProdutos();
});
