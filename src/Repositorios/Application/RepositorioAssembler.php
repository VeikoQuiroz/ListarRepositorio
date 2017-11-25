<?php
namespace Repositorios\Application;

use Repsitorios\Application\RepositorioDto;

class RepositorioAssembler
{
    public function toDto($repositorio)
    {
        if (empty($repositorio)) {
            return null;
        }
		$RepositorioDto = new RepositorioDto();
		$RepositorioDto->setId($repositorio->getId());
		$RepositorioDto->setName($repositorio->getName());
		$RepositorioDto->setFullName($repositorio->getFullName());        
        return $RepositorioDto;
    }
}