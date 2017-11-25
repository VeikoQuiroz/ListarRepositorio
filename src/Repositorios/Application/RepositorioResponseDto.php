<?php
namespace Repositorios\Application;

use \JsonSerializable;

class RepositorioResponseDto implements JsonSerializable
{
    private $repositorios;    

    public function jsonSerialize()
    {
        return [
            'repositorios' => $this->repositorios
        ];
    }

    public function setRepositorios($repositorios)
    {
        $this->repositorios = $repositorios;
    }
    
}