<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOS/DAO/ModeloDAO.php';

class ModeloCTRL{
    public function InserirModeloCTRL(ModeloVo $vo){
        if($vo->getNomeModelo()==''){
            return 0;
        }

        $dao = new ModeloDAO;
        return $dao->InserirModeloDAO($vo);
    }

    public function ConsultarModeloCTRL(){
        $dao = new ModeloDAO;
        return $dao->ConsultarModeloDAO();
    }
}