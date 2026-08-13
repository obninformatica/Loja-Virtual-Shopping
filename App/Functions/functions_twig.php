<?php

use App\Repositories\Site\CategoriaRepository;
use App\Repositories\Site\ProdutoRepository;

$site_url = new \Twig\TwigFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'];
});

// Listar as categorias no left menu
$categorias = new \Twig\TwigFunction('categorias', function(){
    $categoriaRepository = new CategoriaRepository();
    return $categoriaRepository->listarCategoriasProdutos();
});

// Listar as novidades no right menu
$novidade = new \Twig\TwigFunction('novidade', function(){
    $produtoRepository = new ProdutoRepository();
    return $produtoRepository->ultimoProdutoAdicionado();
});
