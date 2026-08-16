<?php

use App\Repositories\Site\CategoriaRepository;
use App\Repositories\Site\ProdutoRepository;
use App\Classes\BreadCrumb;

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

// Listar produto em promoção
$promocao = new \Twig\TwigFunction('promocao', function(){
    $produtoRepository = new ProdutoRepository();
    return $produtoRepository->listarProdutosPromocao(1);
});

// breadcrumb
$breadCrumb = new \Twig\TwigFunction('breadCrumb', function(){
    $breadCrumb = new BreadCrumb();
    return $breadCrumb->createBreadCrumb();
});

