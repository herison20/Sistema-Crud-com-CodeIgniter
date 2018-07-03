<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Professores extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    function CadastroProfessor(){
        $this->load->view('professores/cadastro-professor');
    }

    function SalvarProfessor(){

        // Recebe o formato br da data
        $data = $this->input->post('data_nascimento');
        // Converte em data americana
        $nova_data=implode("-", array_reverse(explode("/", $data)));
        // Recebe os dados do formulário
        $professor = $this->input->post();
        // A nova data é adicionado no array que vai para o BD
        $professor['data_nascimento']=$nova_data;

        $this->load->model("professores_model");
        // Verifica se foi passado o id_curso via post
        if ($this->input->post('id_professor') !=NULL){
            // Se sim, atualiza o registro
            $this->professores_model->atualizarProfessor($professor, $this->input->post('id_professor'));
        }else{
            // Senão, insere um novo registro
            $this->professores_model->inserir($professor);
        }

        $this->session->set_flashdata("success","Professor Salvo com Sucesso!");

        $lista = $this->professores_model->buscaTodos();
        $dados = array("professores"=>$lista);
        $this->load->view('professores/gerenciar-professor', $dados);
    }

    function GerenciarProfessor(){
        $this->load->model("professores_model");
        $lista = $this->professores_model->buscaTodos();
        $dados = array("professores"=>$lista);
        $this->load->view('professores/gerenciar-professor', $dados);
    }

    public function ExcluirProfessor($id){
        $this->load->model("professores_model");
        $this->professores_model->deletar($id);

        $this->session->set_flashdata("success","Professor Excluído com Sucesso!");

        $lista = $this->professores_model->buscaTodos();
        $dados = array("professores"=>$lista);
        $this->load->view('professores/gerenciar-professor', $dados );

    }

    public function EditarProfessor($id){
        if($id == NULL) {
            redirect('/');
        }
        $this->load->model('professores_model');
        $query = $this->professores_model->selecionarId($id);
        if($query == NULL) {
            redirect('/');
        }

        $dados['professor'] = $query;
        //Carrega a View
        $this->load->view('professores/editar-professor', $dados);
    }

    public function VisualizarProfessor($id){
        if($id == NULL) {
            redirect('/');
        }
        $this->load->model('professores_model');
        $query = $this->professores_model->selecionarId($id);
        if($query == NULL) {
            redirect('/');
        }
        $dados['professor'] = $query;
        //Carrega a View
        $this->load->view('professores/visualizar-professor', $dados);
    }

}

?>
