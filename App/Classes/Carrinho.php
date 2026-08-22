<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 21/08/2026
 * Time: 22:42
 */
namespace App\Classes;

use App\Classes\StatusCarrinho;

class Carrinho
{
    private $statusCarrinho;

    public function __construct()
    {
        $this->statusCarrinho = new StatusCarrinho();
        $this->statusCarrinho->criarCarrinho();
    }

    public function add($id)
    {
        if($this->statusCarrinho->produtoEstaNoCarrinho($id))
        {
            $_SESSION['carrinho'][$id]+=1;
        }
        else{
            $_SESSION['carrinho'][$id]=1;
        }
    }

    public function produtoCarrinho($id)
    {
        return $_SESSION['carrinho'][$id];
    }

    public function update($id, $qtd)
    {

    }

    public function remove($id)
    {

    }

    public function clear()
    {

    }

    public function produtosCarrinho()
    {
        
    }
}