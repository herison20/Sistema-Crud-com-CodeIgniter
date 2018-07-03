<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Flexpeak';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home'] = "Flexpeak/index";

// Rotas alunos
$route['alunos/cadastro-aluno'] = "Alunos/CadastroAluno";
$route['alunos/salvar-aluno'] = "Alunos/SalvarAluno";
$route['alunos/gerenciar-aluno'] = "Alunos/GerenciarAluno";

// Rotas cursos
$route['cursos/cadastro-curso'] = "Cursos/CadastroCurso";
$route['cursos/gerenciar-curso'] = "Cursos/GerenciarCurso";
$route['cursos/salvar-curso'] = "Cursos/SalvarCurso";
// Rotas professores
$route['professores/cadastro-professor'] = "Professores/CadastroProfessor";
$route['professores/gerenciar-professor'] = "Professores/GerenciarProfessor";
$route['professores/salvar-professor'] = "Professores/SalvarProfessor";


