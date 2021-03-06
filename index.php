<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo "<hr />";

include 'Controller/PessoaController.php';
include 'Controller/CategoriaProdutoController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/ProdutoController.php';
include 'Controller/MenuController.php';

switch($uri_parse)
{
    // ROTAS PARA PESSOA
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    // ROTAS PARA PRODUTO
    case '/produto':
        ProdutoController::index();
    break;
    
    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;
    
        // ROTAS PARA CATEGORIA PRODUTO
    case '/categoriaproduto':
        CategoriaProdutoController::index();
    break;

    case '/categoriaproduto/form';
        CategoriaProdutoController::form();
    break;

    case '/categoriaproduto/save':
        CategoriaProdutoController::save();
    break;

    case '/categoriaproduto/delete':
        CategoriaProdutoController::delete();
    break;

    //ROTAS PARA FUNNCIONAIRO
    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

    //MENU
    case '/cadastro':
        CadastroController::index();
    break;

    case '/lista':
        ListaController::index();
    break;

    default:
        MenuController::index();
    break;
}