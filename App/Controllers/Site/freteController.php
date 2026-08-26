<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 25/08/2026
 * Time: 16:44
 */
namespace App\Controllers\Site;


use App\Controllers\BaseController;

class freteController extends BaseController
{
    public function calcular()
    {
        echo json_encode('calcular frete');
    }

}