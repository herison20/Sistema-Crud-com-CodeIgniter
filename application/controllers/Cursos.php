<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Cursos extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function SalvarCurso(){

        // Recupera os dados do formulário
        $curso = $this->input->post();
        $this->load->model("cursos_model");

        // Verifica se foi passado o id_curso via post
        if ($this->input->post('id_curso') !=NULL){
            // Se sim, atualiza o registro
            $this->cursos_model->atualizarCurso($curso, $this->input->post('id_curso'));
        }else{
            // Senão, insere um novo registro
            $this->cursos_model->inserir($curso);
        }


        $this->session->set_flashdata("success","Curso Salvo com Sucesso!");

        $lista = $this->cursos_model->buscaTodos();
        $dados = array("cursos"=>$lista);
        $this->load->view('cursos/gerenciar-curso', $dados );


    }
    public function CadastroCurso(){
        $this->load->model("cursos_model");
        $lista = $this->cursos_model->buscaProfessores();
        $dados = array("professores"=>$lista);
        $this->load->view('cursos/cadastro-curso', $dados);
    }

    public function GerenciarCurso(){
        $this->load->model("cursos_model");
        $dados['cursos'] =  $this->cursos_model->buscaTodos();
        $this->load->view('cursos/gerenciar-curso', $dados);
    }

    public function VisualizarCurso($id){
        if($id == NULL) {
            redirect('/');
        }
        $this->load->model('cursos_model');
        $query = $this->cursos_model->selecionarId($id);

        if($query == NULL) {
            redirect('/');
        }
        $dados['curso'] = $query;
        $this->load->view('cursos/visualizar-curso', $dados);
    }

    public function EditarCurso($id){

        if($id == NULL) {
            redirect('/');
        }
        $this->load->model('cursos_model');
        $query = $this->cursos_model->selecionarId($id);
        if($query == NULL) {
            redirect('/');
        }

        // Buscamos os professores para edicão
        $lista = $this->cursos_model->buscaProfessores();

        // Array onde vai guardar os dados do curso e professores, e passamos como parametro para view;
        $dados['curso'] = $query;
        $dados['professores'] =$lista;
        //Carrega a View
        $this->load->view('cursos/editar-curso', $dados);
    }

    public function ExcluirCurso($id){
        $this->load->model("cursos_model");
        $this->cursos_model->deletar($id);
        $this->session->set_flashdata("success","Curso Excluído com Sucesso!");
        $lista = $this->cursos_model->buscaTodos();
        $dados = array("cursos"=>$lista);
        $this->load->view('cursos/gerenciar-curso', $dados );

    }


}



?>
