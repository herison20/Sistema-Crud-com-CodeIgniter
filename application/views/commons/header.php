<?php
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>FlexPeak</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/navbar.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/estilo.css')?>">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?=base_url('home')?>" class="navbar-brand">CRUD - FLEXPEAK</a>
        </div>
        <div id="collapse1" class="navbar-collapse collapse">
            <ul class="nav navbar-nav text-left ">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Aluno <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url('alunos/cadastro-aluno')?>">Cadastrar Aluno</a></li>
                        <li><a href="<?=base_url('alunos/gerenciar-aluno')?>">Gerenciar Alunos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Professor <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url('professores/cadastro-professor')?>" value="">Cadastrar Professor</a></li>
                        <li><a href="<?=base_url('professores/gerenciar-professor')?>" value="">Gerenciar Professores</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Curso <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url('cursos/cadastro-curso')?>">Cadastrar Curso</a></li>
                        <li><a href="<?=base_url('cursos/gerenciar-curso')?>">Gerenciar Cursos</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url('flexpeak/fpdf')?>">Gerear Relatório</a></li>
            </ul>
            <p class=" navbar-text navbar-right link"><a   href="<?=base_url('Login/logout')?>" style="color:#ffffff !important"> Sair</a></p>
            <p class=" navbar-text navbar-right"><strong>Olá: </strong> <?php echo $this->session->userdata("logado");?></p>
        </div>
    </div>
</nav>
<main>
