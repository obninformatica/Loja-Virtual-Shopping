<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 08/08/2026
 * Time: 20:21
 */
namespace App\Models\Database\ConnectDatabase;

use App\Interfaces\InterfaceConnectDatabase;


class ConnectMysqliDatabase implements InterfaceConnectDatabase
{
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new \Mysqli("localhost","root"," ","loja_phpoo");
    }

    public function connectDatabase()
    {
        return $this->mysqli;
    }

}