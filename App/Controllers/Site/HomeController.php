<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 07/08/2026
 * Time: 20:39
 */
namespace App\Controllers\Site;

use App\Classes\Carrinho;
use App\Controllers\BaseController;
//use App\Models\Site\UserModel;
use App\Repositories\Site\ProdutoRepository;

class HomeController extends BaseController
{

    public function index()
    {

//      listar pelo destque
        $produtoRepository = new ProdutoRepository();
        $produtosDestaque = $produtoRepository->listarProdutosOrdenadosPeloDestaque(6);

//      listar pela promoção
        $produtosPromocao = $produtoRepository->listarProdutosPromocao(6);

        $dados =
            [
                'titulo' => 'Curso PHPOO | Loja Virtual',
                'produtos' => $produtosDestaque,
                'produtosPromocao' => $produtosPromocao
            ];

        $template = $this->twig->load('site_home.html');
        $template->display($dados);
    }

}