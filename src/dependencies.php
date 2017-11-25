<?php
// DIC configuration

use Repositorios\Infrastructure\RepositorioFakeRepository;
use Repositorios\Application\RepositorioApplicationService;

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['Repositorio_fake_repository'] = function ($container) {
    return new RepositorioFakeRepository();
};

$container['Repositorio_application_service'] = function ($container) {
    return new RepositorioApplicationService(
        $container['Repositorio_fake_repository']
    );
};