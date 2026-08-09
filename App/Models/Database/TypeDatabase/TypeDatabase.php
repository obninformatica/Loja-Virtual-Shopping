<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 08/08/2026
 * Time: 21:14
 */
namespace App\Models\Database\TypeDatabase;

use App\Interfaces\InterfaceTypeDatabase;

class TypeDatabase
{
    private $interfaceTypedatabase;

    public function __construct(InterfaceTypeDatabase $interfaceTypeDatabase)
    {
        $this->interfaceTypedatabase = $interfaceTypeDatabase;
    }

    public function getDatabase()
    {
        return $this->interfaceTypedatabase;
    }


}