<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 06/08/2026
 * Time: 13:08
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;

class ProdutoController extends BaseController
{

    public function index($parameters)
    {
        dump($parameters[2]);
    }


    public function calca($parameters)
    {
       dump($parameters[3]);
    }

}