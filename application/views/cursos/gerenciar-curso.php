<?php $this->load->view('commons/header');?>

<div class="container bloco-titulo">
    <div class="row">
        <div class="col-xs-6">
            <h2 class="">Cursos</h2>
        </div>
        <div class="col-xs-6 text-right h2">
            <a href="<?=base_url('cursos/cadastro-curso')?>" class="btn btn-primary botao">Cadastrar Curso</a>
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
            <th width="4%">ID Curso</th>
            <th width="5%">Nome do Curso</th>
            <th width="5%">Professor</th>
            <th width="4%">Opções</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($cursos) : ?>
            <?php foreach ($cursos as $curso) : ?>
                <tr>
                    <td><?php echo $curso['id_curso']; ?></td>
                    <td><?php echo $curso['nome_curso']; ?></td>
                    <td><?php echo $curso['nome_professor']; ?></td>
                    <td class="actions text-right">
                        <a href="<?=base_url('cursos/visualizarcurso/'.$curso['id_curso'])?>" class="btn btn-sm btn-success"><i class=""></i>Visualizar</a>
                        <a href="<?=base_url('cursos/editarcurso/'.$curso['id_curso'])?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                        <a href="<?=base_url('cursos/excluircurso/'.$curso['id_curso'])?>" class="btn btn-sm btn-danger"><i class=""></i>Excluir</a>
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
</div>

<?php $this->load->view('commons/footer');?>
