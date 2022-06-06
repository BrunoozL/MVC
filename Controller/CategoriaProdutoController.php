<?php

class CategoriaProdutoController 
{

    public static function index() 
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        $model -> getAllRows();

        include 'View/modules/CategoriaProduto/ListaCategoriaProduto.php';
    }

    public static function form()
    {
        
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();

        if(isset($_REQUEST['id']))
            $model = $model->getById((int) $_REQUEST['id']);

        include 'View/modules/CategoriaProduto/FormCategoriaProduto.php';
    }

    public static function save() {

        include 'Model/CategoriaProdutoModel.php';

        $categoriaproduto = new CategoriaProdutoModel();
        $categoriaproduto->id = $_POST['id'];
        $categoriaproduto->nome = $_POST['nome'];

        $categoriaproduto->save();

        header("Location: /categoriaproduto");
    }

    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();

        $model->delete((int) $_GET['id']);

        header("Location: /categoriaproduto");
    }
}