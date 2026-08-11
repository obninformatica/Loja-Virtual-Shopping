<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 09/08/2026
 * Time: 13:30
 */
namespace App\Repositories\Site;

use App\Models\Site\ProdutoModel;

class ProdutoRepository
{
    private $produto;

    public function __construct()
    {
        $this->produto = new ProdutoModel();
    }

    public function listarProdutosOrdenadosComLimite($limite)
    {
        $sql = "select * from {$this->produto->table} order by produto_destaque = 1 DESC limit {$limite}";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();
        return $this->produto->typeDatabase->fetchAll();

    }

}