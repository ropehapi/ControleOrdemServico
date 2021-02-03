<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/SetorDAO.php';

class SetorCTRL{

    public function InserirSetorCTRL(SetorVo $vo){
        if($vo->getNomeSetor()==''){
            return 0;
        }

        $dao = new SetorDAO;
        return $dao->InserirSetorDAO($vo);
    }

    public function ConsultarSetorCTRL(){
        $dao = new SetorDAO;
        return $dao->ConsultarSetorDAO();
    }
}
