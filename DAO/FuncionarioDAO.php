<?php

class FuncionarioDAO
{
    private $conexao;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(FuncionarioModel $model) 
    { 
        $sql = "INSERT INTO funcionario
                (nome, salario, cargo) 
                VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->salario);
        $stmt->bindValue(3, $model->cargo);
        
        $stmt->execute();      
    }
    
    public function select()
    {
        $sql = "SELECT * FROM funcionario";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchAll();
    }

    public function selectById($id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = "SELECT * FROM funcionario WHERE id = ?";

        $stmt = $this -> conexao -> prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt -> fetchObject("FuncionarioModel");
    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, salario=?, cargo=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->salario);
        $stmt->bindValue(3, $model->cargo);
        $stmt->bindValue(4, $model->id);

        $stmt -> execute();
    }
        
    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt-> execute();
    }
}