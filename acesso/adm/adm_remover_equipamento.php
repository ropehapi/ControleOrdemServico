<?php

require_once '../../CTRL/EquipamentoCTRL.php';
require_once '../../VO/EquipamentoVo.php';
require_once '../../DAO/SetorDAO.php';

$setorDAO = new SetorDAO;
if (isset($_POST['btnExcluir'])) {
    $vo = new EquipamentoVo;
    $ctrl = new EquipamentoCTRL;

    $setor = $_POST['setor'];

    $vo->setSetorEquip($setor);
    $ret = $ctrl->RemoverEquipamentoCTRL($vo);
}

$setores = $setorDAO->ConsultarSetorDAO();


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
                            <h1>Remover equipamento</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active">Remover Equipamento</li>
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
                        <h3 class="card-title">Aqui você poderá remover seus equipamentos</h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="adm_remover_equipamento.php">
                            <div class="form-group">
                                <label>Setor</label>
                                <select id="setor" name="setor" class="form-control select2" style="width: 100%;">
                                    <option value="" selected="selected">Selecione</option>
                                    <?php for ($i = 0; $i < count($setores); $i++) { ?>
                                        <option value="<?= $setores[$i]['id_setor'] ?>"><?= $setores[$i]['nome_setor'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button onclick="return ValidarTela(6)" name="btnExcluir" class="btn btn-success">Excluir</button>
                        </form>
                    </div>

                </div>
                <div>
                    <div class="form-group">


                    </div>
                    <div class="form-group">
                    </div>
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