<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 12/08/2026
 * Time: 23:04
 */
namespace App\Repositories\Site;

use App\Models\Site\CategoriaModel;

class CategoriaRepository
{
    private $categoria;

    public function __construct()
    {
        $this->categoria = new CategoriaModel();
    }

    public function listarCategoriasProdutos()
    {
//        $sql = "select * from {$this->categoria->table} inner join produtos on (categorias.id = produtos.produto_categoria) group by categorias.id";
        $sql = "select categoria_slug,categoria_nome from {$this->categoria->table} group by categorias.id";
        $this->categoria->typeDatabase->prepare($sql);
        $this->categoria->typeDatabase->execute();
        return $this->categoria->typeDatabase->fetchAll();
//        dump($this->categoria->typeDatabase->fetchAll());
    }

}