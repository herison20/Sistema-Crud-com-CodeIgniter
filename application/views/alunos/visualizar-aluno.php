<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
$this->load->view('commons/header'); ?>


<div class="container bloco-visualizar">
    <h2>Aluno ID: #<?php echo $aluno->id_aluno; ?></h2>
    <hr>
    <div class="dl-horizontal">
        <dt>Nome: </dt>
        <dd><?php echo $aluno->nome_aluno; ?></dd>
        <dt>Data de Nascimento: </dt>
        <dd><?php echo date("d/m/Y", strtotime($aluno->data_nascimento)); ?></dd>
        <dt>Logradouro: </dt>
        <dd><?php echo $aluno->logradouro; ?></dd>
        <dt>Número: </dt>
        <dd><?php echo $aluno->numero; ?></dd>
        <dt>Bairro: </dt>
        <dd><?php echo $aluno->bairro; ?></dd>
        <dt>Cidade: </dt>
        <dd><?php echo $aluno->cidade; ?></dd>
        <dt>Estado: </dt>
        <dd><?php echo $aluno->estado; ?></dd>
        <dt>CEP: </dt>
        <dd><?php echo $aluno->cep; ?></dd>
        <dt>ID do Curso: </dt>
        <dd><?php echo $aluno->id_curso; ?></dd>
        <dt>Nome do Curso: </dt>
        <dd><?php echo $aluno->nome_curso; ?></dd>
        <dt>Data de Criação: </dt>
        <dd><?php echo date("d/m/Y H:i:s", strtotime($aluno->data_criacao)); ?></dd>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-offset-1">
            <a href="<?=base_url('alunos/gerenciar-aluno')?>" class="btn btn-lg btn-primary"><i class=""></i>Voltar</a>
        </div>
    </div>
</div>

<?php $this->load->view('commons/footer'); ?>
