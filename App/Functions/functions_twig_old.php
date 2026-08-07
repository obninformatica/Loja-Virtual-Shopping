<?php

//use App\Repositories\Site\CategoriaRepository;
use App\Repositories\Site\ProdutoRepository;
use App\Classes\BreadCrumb;
use App\Models\Site\MarcaModel;
use App\Models\Site\CategoriaModel;
use App\Repositories\Site\ProdutosCarrinhoRepository;
use App\Classes\Carrinho;

$site_url = new \Twig\TwigFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'];
});

// Listar as categorias no left menu
//$categorias = new \Twig\TwigFunction('categorias', function(){
//    $categoriaRepository = new CategoriaRepository();
//    return $categoriaRepository->listarCategoriasProdutos();
//});

// Listar as categorias no left menu
$categorias = new \Twig\TwigFunction('categorias', function(){
    $categoriaModel = new CategoriaModel();
    return $categoriaModel->fetchAll();
});

// Listar as Marcas
$marcas = new \Twig\TwigFunction('marcas', function(){
    $marcaModel = new MarcaModel();
    return $marcaModel->fetchAll();
});

// Listar as novidades no right menu
$novidade = new \Twig\TwigFunction('novidade', function(){
    $produtoRepository = new ProdutoRepository();
    return $produtoRepository->ultimoProdutoAdicionado();
});

// Listar as novidades no right menu
$promocao = new \Twig\TwigFunction('promocao', function(){
    $produtoRepository = new ProdutoRepository();
    return $produtoRepository->listarProdutosPromocao(1);
});

// breadCrumb
$breadCrumb = new \Twig\TwigFunction('breadCrumb', function(){
    $breadCrumb = new BreadCrumb();
    return $breadCrumb->createBreadCrumb();
});

// total dos produtos no carrinho
$valorProdutosCarrinho = new \Twig\TwigFunction('valorProdutosCarrinho', function(){
    $produtosCarrinhoRepository = new ProdutosCarrinhoRepository();
    return $produtosCarrinhoRepository->totalProdutosCarrinho();
});

// número de produtos no carrinho
$numeroProdutosCarrinho = new \Twig\TwigFunction('numeroProdutosCarrinho', function(){
    $produtosCarrinho = new Carrinho();
    return $produtosCarrinho->produtosCarrinho();
});

/*
*
*  $twig = new \Twig\Environment($loader);
*/
