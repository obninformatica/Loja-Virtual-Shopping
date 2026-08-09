<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 08/08/2026
 * Time: 21:07
 */
namespace App\Interfaces;


interface InterfaceTypeDatabase
{
    public function prepare($sql);
    public function bindValue($key, $value);
    public function execute();
    public function rowCount();
    public function fetch();
    public function fetchAll();

}