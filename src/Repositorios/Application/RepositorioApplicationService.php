<?php
namespace Repositorios\Application;

use Repositorios\Application\RepositorioAssembler;
use Repositorios\Application\RepositorioDto;

class RepositorioApplicationService
{
    private $RepositorioRepository;

    public function __construct($RepositorioRepository)
    {
        $this->RepositorioRepository = $RepositorioRepository;
    }

    public function getRepositorios()
    {
        $RepositorioDto = array();
        $Repositorios = $this->RepositorioRepository->getBestSellers();
        foreach ($Repositorios as $Repositorio) {
            $RepositorioAssembler = new RepositorioAssembler();
            $RepositorioDto = $RepositorioAssembler->toDto($Repositorio);
            array_push($RepositoriosDto, $RepositorioDto);
        }
        return $RepositoriosDto;
    }
    
}