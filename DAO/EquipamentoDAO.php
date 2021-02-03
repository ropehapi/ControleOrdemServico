<?php 

require_once 'ConexaoDAO.php';

class EquipamentoDAO extends Conexao{

    public function InserirEquipamento(EquipamentoVo $vo){
        $conexao = parent::retornaConexao();
        $comando = 'insert into 
                    tb_equipamento(ident_equipamento,desc_equipamento,id_modelo,id_tipo,id_usuario)
                    values(?,?,?,?,?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1,$vo->getIdentEquipamento());
        $sql->bindValue(2,$vo->getDescEquipamento());
        $sql->bindValue(3,$vo->getIdModelo());
        $sql->bindValue(4,$vo->getIdTipo());
        $sql->bindValue(5,$vo->getIdUsuario());

        try{
            $sql->execute();
            return 1;
        }catch(Exception $ex){
            return -1;
        }
    }

    public function ConsultarEquipamentoDAO(){
        $conexao = parent::retornaConexao();
        $comando = 'select id_equipamento , ident_equipamento, desc_equipamento, id_modelo, id_tipo, id_usuario from tb_equipamento';
        
    }
}