<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 06/08/2026
 * Time: 13:19
 */
namespace App\Controllers;

use App\Classes\Uri;

class Method
{
    private $uri;

    public function __construct()
    {
        $this->uri = new Uri();
    }

    private function getMethod()
    {
        if(!$this->uri->emptyUri())
        {
            $explodeUri = array_filter(explode('/',$this->uri->getUri()));
            return(isset($explodeUri[2])) ? $explodeUri[2] : null;
        }
    }

    public function method($object)
    {
        //dump($object);
        if(method_exists($object, $this->getMethod()))
        {
            return $this->getMethod();
        }
        return DEFAULT_METHOD;
    }

}