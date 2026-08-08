<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 08/08/2026
 * Time: 09:47
 */
namespace App\Classes;


class Parameters
{
    private $uri;
    private $parameter;

    public function __construct()
    {
        $uri = new Uri();
        $this->uri = $uri->getUri();
    }

    private function explodeParameters()
    {
        // http://localhost/produto/calca/jeans/medio/blue
        $explodeUri = explode('/',$this->uri);
        $this->parameter = array_filter($explodeUri);
        //return $this->parameter;
    }

    public function getParameterMethod($object, $method)
    {
        if(method_exists($object,$method))
        {
            $this->explodeParameters();

            if($method == 'index')
            {
                unset($this->parameter[1]);
                return isset($this->parameter[2]) ? array_values($this->parameter) : null;
            }
            unset($this->parameter[1], $this->parameter[2]);
            return isset($this->parameter[3]) ? array_values($this->parameter) : null;

        }
    }

}