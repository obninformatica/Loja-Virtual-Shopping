<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 08/08/2026
 * Time: 20:08
 */
namespace App\Models\Database\ConnectDatabase;

use App\Interfaces\InterfaceConnectDatabase;

class Connection
{
    private $interfaceConnectDatabase;

    public function __construct(InterfaceConnectDatabase $interfaceConnectDatabase)
    {
        $this->interfaceConnectDatabase = $interfaceConnectDatabase;
    }

    public function connectDatabase()
    {
        return $this->interfaceConnectDatabase->connectDatabase();
    }

}