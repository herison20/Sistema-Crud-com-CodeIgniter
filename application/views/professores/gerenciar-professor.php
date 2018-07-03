<?php $this->load->view('commons/header');?>
<div class="container bloco-titulo">
    <div class="row">
        <div class="col-xs-6">
            <h2 class="">Professores</h2>
        </div>
        <div class="col-xs-6 text-right h2">
            <a href="<?=base_url('professores/cadastro-professor')?>" class="btn btn-primary botao">Cadastrar Professor</a>
        </div>
    </div>
    <hr>
</div>
<div class="container bloco-estilo">
    <?php if ($this->session->flashdata('error') == TRUE): ?>
        <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success') == TRUE): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>
    <table class="table table-hover table-striped table-bordered table-condensed tabled">
        <thead class="" >
        <tr class="bg-primary">
            <th width="1%">Id Professor</th>
            <th width="2%">Nome</th>
            <th width="5%">Data de Nascimento</th>
            <th width="5%">Opções</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($professores) : ?>
            <?php foreach ($professores as $professor) : ?>
                <tr>
                    <td><?php echo $professor['id_professor']; ?></td>
                    <td><?php echo $professor['nome']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($professor['data_nascimento'])); ?></td>
                    <td class="actions text-right">
                        <a href="<?= base_url('professores/visualizarprofessor/'.$professor['id_professor'])?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                        <a href="<?=base_url('professores/editarprofessor/'.$professor['id_professor'])?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                        <a href="<?=base_url('professores/excluirprofessor/'.$professor['id_professor'])?>" class="btn btn-sm btn-danger"><i class=""></i>Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <?php $this->load->view('commons/footer');?>
