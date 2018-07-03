<?php
/**
 * Created by PhpStorm.
 * User: Hérison Assunção
 *
 */
$this->load->view('commons/header'); ?>

<div class="container bloco-form">
    <h2 class="">Cadastrar Aluno</h2>
    <hr>
    <form action="<?=base_url('alunos/salvar-aluno')?>" method="post" enctype="multipart/form-data">

        <div class="row">
            <br>
            <div class="form-group col-xs-10">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $aluno->nome_aluno;?>" maxlength="50"  class="form-control" required/>
                <?php echo form_error("nome","") ?>
            </div>
            <div class="form-group col-xs-2 ">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="text" name="data_nascimento" value="<?php echo date("d/m/Y", strtotime($aluno->data_nascimento));?>" class="form-control" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-mask="00/00/0000" maxlength="10" placeholder="Ex.: dd/mm/aaaa" required/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-4">
                <label for="logradouro">Logradouro:</label>
                <input type="text" name="logradouro" value="<?php echo $aluno->logradouro;?>" id="rua" class="form-control" required/>
            </div>
            <div class="form-group col-xs-2">
                <label for="numero">Número:</label>
                <input type="text" name="numero" value="<?php echo $aluno->numero;?>" maxlength="10" class="form-control" required/>
            </div>
            <div class="form-group col-xs-3">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $aluno->bairro;?>" id="bairro" class="form-control" required/>
            </div>
            <div class="form-group col-xs-3">
                <label for="cep">CEP:</label>
                <input type="text" name="cep" value="<?php echo $aluno->cep;?>" pattern="[0-9]{5}-[0-9]{3}$" data-mask="00000-000" onblur="pesquisacep(this.value);" maxlength="9" placeholder="Ex.: 00000-000" class="form-control" required/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-4">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" value="<?php echo $aluno->cidade;?>" id="cidade" class="form-control" required/>
            </div>
            <div class="form-group col-xs-3">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" value="<?php echo $aluno->estado;?>" id="uf"  class="form-control"required/>
            </div>
            <div class="form-group col-xs-5 ">
                <label for="id_curso">Curso atual do estudante: <u> <em><?php echo $aluno->nome_curso;?></em> </u></label>
                <select class="form-control" name="id_curso" >
                    <?php if ($cursos) : ?>
                        <?php foreach ($cursos as $curso) : ?>
                            <option value="<?php  echo $curso['id_curso'];?>"><?php echo $curso['nome'];?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Nenhum registro encontrado.</p>
                    <?php endif; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4 pull-right text-right">
                <input type="hidden" name="id_aluno" value="<?php echo $aluno->id_aluno;?>">
                <button type="submit"  class="btn btn-primary botao">Salvar</button>
                <a href="<?=base_url('alunos/gerenciar-aluno')?>" class="btn btn-default botao  ">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="<?= base_url('assets/js/cep.js') ?>"></script>
<?php $this->load->view('commons/footer'); ?>
<script type="text/javascript" src="<?= base_url('assets/js/cep.js') ?>"></script>
