<?php $this->load->view('commons/header');?>

<div class="container bloco-titulo">
    <div class="row">
        <div class="col-xs-6">
            <h2 class="">Alunos</h2>
        </div>
        <div class="col-xs-6 text-right h2">
            <a href="<?=base_url('alunos/cadastro-aluno')?>" class="btn btn-primary botao">Cadastrar Aluno</a>
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
            <th width="1%">ID do Aluno</th>
            <th width="5%">Nome</th>
            <th width="2%">Data de Nasc.</th>
            <th width="1%">Cidade</th>
            <th width="1%">UF</th>
            <th width="2%">Curso</th>
            <th width="4%">Opções</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($alunos) : ?>
            <?php foreach ($alunos as $aluno) : ?>
                <tr>
                    <td><?php echo $aluno['id_aluno']; ?></td>
                    <td><?php echo $aluno['nome_aluno']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($aluno['data_nascimento'])); ?></td>

                    <td><?php echo $aluno['cidade']; ?></td>
                    <td><?php echo $aluno['estado']; ?></td>
                    <td><?php echo $aluno['nome_curso']; ?></td>

                    <td class="actions text-right">
                        <a href="<?=base_url('alunos/visualizaraluno/'.$aluno['id_aluno'])?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                        <a href="<?=base_url('alunos/editaraluno/').$aluno['id_aluno']?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                        <a href="<?=base_url('alunos/excluiraluno/'.$aluno['id_aluno'])?>" class="btn btn-sm btn-danger"><i class=""></i>Excluir</a>
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
