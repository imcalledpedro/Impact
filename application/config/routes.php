<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Usuario/logar';
$route['register'] = 'Views/cadastrar';
$route['autenticar'] = 'Usuario/autenticar';

$route['dashboard'] = 'Views/dashboard';
$route['dashboard_produtos'] = 'Views/dprodutos';
$route['dashboard_publicacoes'] = 'Views/dpublicacoes';

$route['index'] = 'Home/index';
$route['produtos'] = 'Views/produtos';
$route['publicacao'] = 'Views/publicacao';

$route['perfil'] = 'Usuario/perfil';
$route['encerrar'] = 'Usuario/encerrar';


$route['deletarProduto'] = 'Home/deletarProduto';
$route['deletarPublicacao'] = 'Home/deletarPublicacao';