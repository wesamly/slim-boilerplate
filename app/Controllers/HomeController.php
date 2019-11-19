<?php
namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController {
    public function __construct() {
        
    }
    
    public function home(Request $request, Response $response) {

      $response->getBody()->write("Hello there!");
      return $response;
    }
}
