<?php
/**
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Date: 29/06/2018
 * Time: 22:56
 */
$this->load->view('commons/header'); ?>

<div class="container bloco-visualizar ">
    <h2>Curso ID: #<?php echo $curso->id_curso; ?></h2>
    <hr>
    <div class="dl-horizontal">
        <dt>Nome: </dt>
        <dd><?php echo $curso->nome_curso; ?></dd>
        <dt>ID do Professor: </dt>
        <dd><?php echo $curso->id_professor; ?></dd>
        <dt>Nome do Professor: </dt>
        <dd><?php echo $curso->nome_professor; ?></dd>
        <dt>Data de Criação: </dt>
        <dd><?php echo date("d/m/Y H:i:s", strtotime($curso->criacao_curso)); ?></dd>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-offset-1">
            <a href="<?=base_url('cursos/gerenciar-curso')?>" class="btn btn-lg btn-primary"><i class=""></i>Voltar</a>
        </div>
    </div>
</div>
<?php $this->load->view('commons/footer'); ?>
