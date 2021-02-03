<?php

require_once 'ConexaoDAO.php';

class TipoDAO extends Conexao{
    public function InserirTipoDAO(TipoVo $vo){
        $conexao = parent::retornaConexao();
        $comando = 'insert into tb_tipo(nome_tipo)
                    value(?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1,$vo->getNomeTipo());

        try{
            $sql->execute();
            return 1;
        }catch(Exception $ex){
            return -1;
        }
    }

    public function ConsultarTipoDAO(){
        $conexao = parent::retornaConexao();
        $comando = 'select id_tipo ,nome_tipo from tb_tipo order by nome_tipo';
        $sql = new PDOStatement;
        $sql = $conexao->prepare($comando);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();
    }
}