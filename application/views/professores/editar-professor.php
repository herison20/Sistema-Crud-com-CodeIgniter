<?php
/**
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Date: 29/06/2018
 * Time: 22:56
 */
$this->load->view('commons/header'); ?>

<div class="container bloco-form">
    <h2 class="">Atualizar Professor</h2>
    <hr>
    <form action="<?=base_url('professores/salvar-professor') ?>" method="post">

        <div class="row">
            <br>
            <div class="form-group col-xs-9">
                <label for="nome">Nome:</label>
                <input type="text" name="nome"  value="<?php echo $professor->nome;?>" maxlength="50" class="form-control" required/>
                <?php echo form_error("nome","") ?>
            </div>
            <div class="form-group col-xs-3">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="text" name="data_nascimento" value="<?php echo $professor->data_nascimento;?>" class="form-control"  pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-mask="00/00/0000" maxlength="10" placeholder="Ex.: dd/mm/aaaa" required>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4 pull-right text-right">
                <input type="hidden" name="id_professor" value="<?php echo $professor->id_professor;?>">
                <button type="submit"  class="btn btn-primary botao">Salvar</button>
                <a href="<?=base_url('professores/gerenciar-professor') ?>" class="btn btn-default botao  ">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view('commons/footer'); ?>
