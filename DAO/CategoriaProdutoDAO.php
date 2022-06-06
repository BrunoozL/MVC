<?php

class CategoriaProdutoDAO
{
    private $conexao;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(CategoriaProdutoModel $model) 
    { 
        $sql = "INSERT INTO categoriaproduto 
                (nome)
                VALUES (?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        
        $stmt->execute();      
    }
    
    public function select()
    {
        $sql = "SELECT * FROM categoriaproduto";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchAll();
    }

    public function selectById($id)
    {
        include_once 'Model/CategoriaProdutoModel.php';

        $sql = "SELECT * FROM categoriaproduto WHERE id = ?";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt -> fetchObject("CategoriaProdutoModel");
    }

    public function update(CategoriaProdutoModel $model)
    {
        $sql = "UPDATE categoriaproduto SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);

        $stmt -> execute();
    }
        
    public function delete(int $id)
    {
        $sql = "DELETE FROM categoriaproduto WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt-> execute();
    }
}