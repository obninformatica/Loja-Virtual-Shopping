<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 21/08/2026
 * Time: 15:12
 */
namespace App\Classes;


class StatusCarrinho
{
    public function carrinhoExiste()
    {
        return (isset($_SESSION['carrinho'])) ? true : false;
    }

    public function criarCarrinho()
    {
        if(!$this->carrinhoExiste())
        {
            $_SESSION['carrinho'] = [];
        }
//        return $_SESSION['carrinho'];
    }

    public function produtoEstaNoCarrinho($id)
    {
        if(isset($_SESSION['carrinho'][$id]))
        {
            return true;
        }
        return false;
    }

    public function carrinho()
    {
        return $_SESSION['carrinho'];
    }

}