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

class CarrinhoController extends BaseController
{
    private $carrinho;

    public function __construct()
    {
        $this->carrinho = new Carrinho();
    }
    public function add($param)
    {
        //var_dump($param);
        $this->carrinho->add($param[0]);
    }
}