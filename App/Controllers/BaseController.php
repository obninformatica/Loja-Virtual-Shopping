<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 07/08/2026
 * Time: 20:48
 */
namespace App\Controllers;


class BaseController
{

    protected $twig;

    public function setTwig($twig)
    {
        $this->twig = $twig;
    }

}