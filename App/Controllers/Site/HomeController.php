<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 07/08/2026
 * Time: 20:39
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\Site\User;

class HomeController extends BaseController
{

    public function index()
    {
        $user = new User();
        dump($user->fetchAll());
        dump($user->find('id', 4));


//        $dados =
//            [
//                'titulo' => 'Curso PHPOO | Loja Virtual',
//                'nome' => 'Osvaldo Bodo'
//            ];
//
//        $template = $this->twig->load('site_home.html');
//        $template->display($dados);
    }

}