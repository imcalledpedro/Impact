<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Usuario/logar';
$route['register'] = 'Usuario/cadastrar';
$route['autenticar'] = 'Usuario/autenticar';
$route['dashboard'] = 'Views/dashboard';
$route['produtos'] = 'Views/produtos';
$route['publicacoes'] = 'Views/publicacoes';
$route['encerrar'] = 'Usuario/encerrar';

// $route['produtos'] = 'Produtos';