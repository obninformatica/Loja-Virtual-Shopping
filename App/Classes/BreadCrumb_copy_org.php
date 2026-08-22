<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 16/08/2026
 * Time: 09:45
 */
namespace App\Classes;

use App\Classes\Uri;

class BreadCrumb
{
    private $uri;

    public function __construct()
    {
        $uri = new Uri();
        $this->uri = $uri->getUri();
    }

    public function createBreadCrumb()
    {
//      breadcrumb para busca
        if(substr_count($this->uri, '?') > 0)
        {
            $explodeIgual = explode('=',$this->uri);
            //return "<span style='color:#000;'>Você está buscando:</span><span style='font-style: italic;color: #00aced'><a href='/' style='text-decoration: none;color: #00aced'>Inicio</a>".str_replace('+','-',$explodeIgual[1])."</span>";
            //return "<span style='color:#000;'>Você está buscando:&nbsp;</span><span style='font-style: italic;color: #00aced'>".str_replace('+','-',$explodeIgual[1])."</span>";
            //return "<span style='color:#000;'>Navegação :&nbsp;</span><span style='font-style: italic;color: #00aced'><a href='/' style='text-decoration: none;color: #00aced;'>home/</a>busca/".str_replace('+','-',$explodeIgual[1]).(ltrim($this->uri. '/'))."</span>";
			return "<span style='color:#000;'>Navegação :&nbsp;</span><span style='font-style: italic;color: #00aced'><a href='/' style='text-decoration: none;color: #00aced;'>home/</a>busca/".str_replace('+','-',$explodeIgual[1])."</span>";
        }

//      breadcrumb para a página inicial
		if($this->uri == '/')
        {
            return "<span style='color:#000;'>Navegação</span>: <span style='font-style: italic;color: #00aced'>Inicio</span>";
        }
//      breadcrumb para outras páginas internas do site
//        return "<span style='color:#000;'>Navegação</span>: <span style='font-style: italic;'><a href='/' style='text-decoration: none;'>Inicio</a>".ucfirst(ltrim($this->uri. '/'))."</span>";
        return "<span style='color:#000;'>Navegação</span>: <span style='font-style: italic;color: #00aced'><a href='/' style='text-decoration: none;color: #00aced;'>Inicio</a>".ltrim($this->uri. '/')."</span>";
		
    }

}