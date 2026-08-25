<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 25/08/2026
 * Time: 10:20
 */
namespace App\Classes;

use Cagartner\CorreiosConsulta\CorreiosConsulta;

class Correios
{
    private $tipo;
    private $formato;
    private $cepDestino;
    private $cepOrigem;
    private $peso;
    private $comprimento;
    private $altura;
    private $largura;
    private $diametro;
    private $correios;

    public function __construct($param)
    {
        $this->correios = new CorreiosConsulta();
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setFormato($formato)
    {
        $this->formato = $formato;
    }
    public function setCepDestino($cepDestino)
    {
        $this->cepDestino = $cepDestino;
    }
    public function setCepOrigem($cepOrigem)
    {
        $this->cepOrigem = $cepOrigem;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setLargura($largura)
    {
        $this->largura = $largura;
    }
    public function setDiametro($diametro)
    {
        $this->diametro = $diametro;
    }
    private function dadosCalcularFrete()
    {
        $dados = [
            'tipo'              => $this->tipo,
            'formato'           => $this->formato,
            'cep_destino'       => $this->cepDestino,
            'cep_origem'        => $this->cepOrigem,
//          'empresa'           => '',
//          'senha'             => '',
            'peso'              => $this->peso,
            'comprimento'       => $this->comprimento,
            'altura'            => $this->altura,
            'largura'           => $this->largura,
            'diametro'          => $this->diametro,
//          'mao_propria'       => '1',
//          'valor_declarado'   => '1',
//          'aviso_recebimento' => '1'
        ];

        // echo Correios::frete($dados);
        return $dados;
    }

    public function calcularFrete()
    {
        return $this->correios->frete($this->dadosCalcularFrete());
    }






}