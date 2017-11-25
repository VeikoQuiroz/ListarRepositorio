<?php
namespace Repositorios\Infrastructure;

use Repositorios\Domain\RepositorioRepository;
use Repositorios\Domain\Repositorio;

class RepositorioFakeRepository implements RepositorioRepository
{
    public function __construct()
    {
    }

    public function getRepositorios()
    {
        $Repositorios = array();
        $Repositorios[] = new Repositorio('1','Repositorio1','Repositorio de Prueba 1');
        $Repositorios[] = new Repositorio('2','Repositorio2','Repositorio de Prueba 2');
        $Repositorios[] = new Repositorio('3','Repositorio3','Repositorio de Prueba 3');
        return $Repositorios;
    }
}