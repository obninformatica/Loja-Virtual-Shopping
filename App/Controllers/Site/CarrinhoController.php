<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 22/08/2026
 * Time: 13:57
 */
namespace App\Controllers\Site;

use App\Classes\Carrinho;
use App\Controllers\BaseController;
use App\Repositories\Site\ProdutosCarrinhoRepository;

class CarrinhoController extends BaseController
{
    private $carrinho;
    private $produtosCarrinhoRepository;

    public function __construct()
    {
        $this->carrinho = new Carrinho();
        $this->produtosCarrinhoRepository = new ProdutosCarrinhoRepository();
    }
    public function index()
    {
        $produtos = $this->produtosCarrinhoRepository->produtosNoCarrinho();

        $dados = [
            'titulo' => 'Curso PHPOO | Carrinho',
            'produtos' => $produtos
        ];
        $template = $this->twig->load('site_carrinho.html');
        $template->display($dados);
    }
    public function add($param)
    {
        //var_dump($param);
        $this->carrinho->add($param[0]);
    }

    public function get()
    {
        echo json_encode([
            'numeroProdutosCarrinho' => count($this->carrinho->produtosCarrinho()),
            'valorProdutosCarrinho' => $this->produtosCarrinhoRepository->totalProdutosCarrinho()
        ]);
    }
}