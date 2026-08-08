<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 07/08/2026
 * Time: 20:39
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;

class HomeController extends BaseController
{

    public function index()
    {
        $dados =
            [
                'titulo' => 'Curso PHPOO | Loja Virtual',
                'nome' => 'Osvaldo Bodo'
            ];

        $template = $this->twig->load('site_home.html');
        $template->display($dados);
    }

}