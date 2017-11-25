<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Repositorios\Application\RepositorioResponseDto;

$app->get('/', function (Request $request, Response $response, array $args) use ($app) {
    try {
        $RepositorioApplicationService = $app->getContainer()->get('Repositorio_application_service');
        if (empty($RepositorioApplicationService)) {
            throw new Exception("IoC returned null for RepositorioApplicationService");
        }
        $Repositorios = $RepositorioApplicationService->getRepositorios();
        $RepositorioResponseDto = new RepositorioResponseDto();
        $RepositorioResponseDto->setRepositorios($Repositorios);        
        return $response->withJson($RepositorioResponseDto, 200, JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        $errorDto = getErrorDto($e);
        return $response->withJson($errorDto, 200, JSON_UNESCAPED_UNICODE);
    }
});

function getErrorDto(Exception $e)
{
    $errorDto = new \stdClass();
    $errorDto->error_message = $e->getMessage();
    return $errorDto;
}