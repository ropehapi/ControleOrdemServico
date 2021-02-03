<?php

require_once 'ConexaoDAO.php';

class ModeloDAO extends Conexao{

    public function InserirModeloDAO(ModeloVo $vo){
        $conexao = parent::retornaConexao();
        $comando = 'insert into 
                    tb_modelo(nome_modelo)
                    values(?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1,$vo->getNomeModelo());

        try{
            $sql->execute();
            return 1;
        }
        catch(Exception $ex){
            return -1;
        }
    }

    public function ConsultarModeloDAO(){
        $conexao = parent::retornaConexao();
        $comando = 'select id_modelo ,nome_modelo from tb_modelo order by nome_modelo';
        $sql = new PDOStatement;
        $sql = $conexao->prepare($comando);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();
    }
}