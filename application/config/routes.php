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
$route['produtos'] = 'Home/produtos';

$route['publicacao'] = 'Home/exibirPublicacao';

$route['perfil'] = 'Usuario/exibirDados';
$route['encerrar'] = 'Usuario/encerrar';

$route['adicionarPublicacao'] = 'Home/adicionarPublicacao';
$route['editarPublicacao'] = 'Home/editarPublicacao';
$route['deletarPublicacao'] = 'Home/deletarPublicacao';

$route['adicionarProduto'] = 'Home/adicionarProduto';
$route['editarProduto'] = 'Home/editarProduto';
$route['deletarProduto'] = 'Home/deletarProduto';