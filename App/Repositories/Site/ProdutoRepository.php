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
//  listar o ultimo produto adicionado
    public function ultimoProdutoAdicionado()
    {
        $sql = "select produto_nome,produto_slug,produto_foto,produto_promocao,produto_valor_promocao,produto_valor from {$this->produto->table} order by id DESC";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();
        return $this->produto->typeDatabase->fetch();

    }
//  listar os produtos em destaque
    public function listarProdutosOrdenadosPeloDestaque($limite)
    {
        $sql = "select * from {$this->produto->table} order by produto_destaque = 1 DESC limit {$limite}";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();
        return $this->produto->typeDatabase->fetchAll();

    }
//  listar os produtos em promoção
    public function listarProdutosPromocao($limite)
    {
        $sql = "select * from {$this->produto->table} where produto_promocao = 1 order by RAND() limit {$limite}";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();
        return $this->produto->typeDatabase->fetchAll();
    }

}