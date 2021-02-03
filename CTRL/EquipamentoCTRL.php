<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOS/DAO/EquipamentoDAO.php';

class EquipamentoCTRL{

    public function InserirEquipamentoCTRL(EquipamentoVO $vo){
        if($vo->getIdTipo()=='' ||
           $vo->getIdModelo()==''|| 
           $vo->getIdentEquipamento()==''||
           $vo->getDescEquipamento()==''){
            return 0;
        }
        //$vo->getIdUsuario(UtilCTRL::CodigoUserLogado);

        $dao = new EquipamentoDAO();
        return $dao->InserirEquipamento($vo);
    }

    public function AlocarEquipamentoCTRL(EquipamentoVo $vo){
        if($vo->getSetorEquip()=='' || $vo->getIdEquipamento()==''){
            return 0;
        }
    }

    public function ConsultarEquipamentoCTRL(){
        $dao = new EquipamentoDAO;
        return $dao->ConsultarEquipamentoDAO();
    }

    public function RemoverEquipamentoCTRL(EquipamentoVo $vo){
        if($vo->getSetorEquip()==''){
            return 0;
        }
    }
}