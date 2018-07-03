<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
$this->load->view('commons/header');?>

<div class="container bloco-form">
    <h2 class="">Atualizar Curso</h2>
    <hr>
    <form action="<?=base_url('cursos/salvar-curso')?>" method="post">
        <div class="row">
            <br>
            <div class="form-group col-xs-6">
                <label for="Nome">Nome do Curso:</label>
                <input type="text" name="nome" value="<?php echo $curso->nome_curso?>"  maxlength="50" class="form-control" required/>

            </div>
            <div class="form-group col-xs-6 ">
                <label for="id_professor">Professor atual do Curso: <u> <em><?php echo $curso->nome_professor;?></em> </u></label>
                <select class="form-control" name="id_professor" id="id_professor">

                    <?php if ($professores) : ?>
                        <?php foreach ($professores as $professor) : ?>
                            <option value="<?php  echo $professor['id_professor'];?>"><?php echo $professor['nome'];?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Nenhum registro encontrado.</p>
                    <?php endif; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4 pull-right text-right">
                <input type="hidden" name="id_curso" value="<?php echo $curso->id_curso?>">
                <button type="submit"  class="btn btn-primary ">Salvar</button>
                <a href="<?=base_url('cursos/gerenciar-curso')?>" class="btn btn-default botao  ">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view('commons/footer'); ?>
