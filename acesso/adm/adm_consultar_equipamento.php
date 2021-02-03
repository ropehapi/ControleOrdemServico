<?php

require_once '../../CTRL/EquipamentoCTRL.php';
require_once '../../Vo/EquipamentoVO.php';
require_once '../../DAO/TipoDAO.php';

$tipoCTRL = new TipoDAO;

if (isset($_POST['btnGravar'])) {
    $vo = new EquipamentoVo;
    $ctrl = new EquipamentoCTRL;

    $tipo = $_POST['tipo'];

    $vo->setIdTipo($tipo);
    $ret = $ctrl->ConsultarEquipamentoCTRL($vo);
}

$tipos = $tipoCTRL->ConsultarTipoDAO();

?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once '../../template/_head.php'
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once '../../template/_topo.php';
        include_once '../../template/_menu.php';
        ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Consultar equipamento</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active">Consultar Equipamento</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Aqui você faz a consulta dos seus equipamentos</h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="adm_consultar_equipamento.php">
                            <div class="form-group">
                                <label>Pesquisar por tipo</label>
                                <select id="tipo" name="tipo" class="form-control select2" style="width: 100%;">
                                    <option value="" selected="selected">Selecione</option>
                                    <?php for ($i = 0; $i < count($tipos); $i++) { ?>
                                        <option value="<?= $tipos[$i]['id_tipo'] ?>"><?= $tipos[$i]['nome_tipo'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button name="btnGravar" class="btn btn-success" onclick="return ValidarTela(2)">Gravar</button>
                        </form>
                    </div>

                </div>
                <div>
                    <div class="form-group">


                    </div>
                    <div class="form-group">
                        < </div>
                            <hr>

                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <?php
        include_once '../../template/_footer.php';
        include_once '../../template/_msg.php';
        ?>
    </div>
    <!-- ./wrapper -->


</body>

</html>