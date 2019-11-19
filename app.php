<?php
use App\BasePathDetector;

require __DIR__ . '/vendor/autoload.php';

$app = \DI\Bridge\Slim\Bridge::create();
$app->setBasePath((new BasePathDetector($_SERVER))->getBasePath());

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

require __DIR__ . '/routes.php';

$app->run();