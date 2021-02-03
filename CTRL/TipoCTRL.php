<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/TipoDAO.php';

class TipoCTRL{

    public function InserirTipoCTRL(TipoVo $vo){
        if($vo->getNomeTipo()==''){
            return 0;
        }

        $dao = new TipoDAO;
        return $dao->InserirTipoDAO($vo);
    }

    public function ConsultarTipoCTRL(){
        $dao = new TipoDAO;
        return $dao->ConsultarTipoDAO();
    }
}
