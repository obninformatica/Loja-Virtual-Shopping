<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 08/08/2026
 * Time: 20:19
 */
namespace App\Models\Database\ConnectDatabase;

use App\Interfaces\InterfaceConnectDatabase;
use PDO;
class ConnectPdoDatabase implements InterfaceConnectDatabase
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=loja_phpoo","root", "");
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function connectDatabase()
    {
        return $this->pdo;
    }

}