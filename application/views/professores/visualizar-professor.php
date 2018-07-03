<?php
/**
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Date: 29/06/2018
 * Time: 22:56
 */
$this->load->view('commons/header'); ?>

<div class="container bloco-visualizar ">
    <h2>Professor ID: #<?php echo $professor->id_professor; ?></h2>
    <hr>
    <div class="dl-horizontal">
        <dt>Nome: </dt>
        <dd><?php echo $professor->nome; ?></dd>
        <dt>Data de Nascimento: </dt>
        <dd><?php echo date("d/m/Y", strtotime($professor->data_nascimento)); ?></dd>
        <dt>Data de Criação: </dt>
        <dd><?php echo date("d/m/Y H:i:s", strtotime($professor->data_criacao)); ?></dd>
    </div>
    <hr>

    <div class="row">
        <div class="col-xs-offset-1">
            <a href="<?=base_url('professores/gerenciar-professor')?>" class="btn btn-lg btn-primary"><i class=""></i>Voltar</a>
        </div>
    </div>
</div>

<?php $this->load->view('commons/footer'); ?>
