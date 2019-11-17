<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Usuario/logar';
$route['register'] = 'Views/cadastrar';
$route['autenticar'] = 'Usuario/autenticar';

$route['dashboard'] = 'Views/dashboard';

$route['dashboard/produtos'] = 'Views/dprodutos';
$route['dashboard/publicacoes'] = 'Views/dpublicacoes';
$route['dashboard/perfil'] = 'Usuario/exibirDados';

$route['dashboard/publicacoes/adicionar'] = 'Home/adicionarPublicacao';
$route['dashboard/publicacoes/editar'] = 'Home/editarPublicacao';
$route['dashboard/publicacoes/deletar'] = 'Home/deletarPublicacao';

$route['dashboard/produtos/adicionar'] = 'Home/adicionarProduto';
$route['dashboard/produtos/editar'] = 'Home/editarProduto';
$route['dashboard/produtos/deletar'] = 'Home/deletarProduto';

$route['dashboard/encerrar'] = 'Usuario/encerrar';

$route['index'] = 'Home/index';
$route['produtos'] = 'Home/produtos';

$route['publicacao'] = 'Home/exibirPublicacao';

