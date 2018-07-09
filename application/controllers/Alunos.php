<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

/**
 *
 */
class Alunos extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function SalvarAluno()
    {
        // Recebe o formato br da data
        $data = $this->input->post('data_nascimento');
        // Converte em data amaericana
        $nova_data=implode("-", array_reverse(explode("/", $data)));
        // Recebe os dados do formulário
        $aluno = $this->input->post();
        // A nova data é adicionado no array que vai para o BD
        $aluno['data_nascimento']=$nova_data;

        $this->load->model("alunos_model");

        // Verifica se foi passado o id_curso via post
        if ($this->input->post('id_aluno') != NULL) {
            // Se sim, atualiza o registro
            $this->alunos_model->atualizarAluno($aluno, $this->input->post('id_aluno'));
        } else {
            // Senão, insere um novo registro
            $this->alunos_model->inserir($aluno);
        }

        $this->session->set_flashdata("success", "Aluno Salvo com Sucesso!");

        // Busca todos os registros da tabela pra exibir no gerenciar aluno
        $lista = $this->alunos_model->buscaTodos();
        $dados = array("alunos" => $lista);
        $this->load->view('alunos/gerenciar-aluno', $dados);
    }

    function CadastroAluno(){
        $this->load->model("alunos_model");
        $lista = $this->alunos_model->buscaCursos();
        $dados = array("cursos"=>$lista);
        $this->load->view('alunos/cadastro-aluno', $dados);
    }

    function GerenciarAluno(){
        $this->load->model("alunos_model");
        $lista = $this->alunos_model->buscaTodos();
        $dados = array("alunos"=>$lista);
        $this->load->view('alunos/gerenciar-aluno', $dados);
    }

    public function EditarAluno($id){
        //Verifica se foi passado um ID, se não vai para a página home
        if($id == NULL) {
            redirect('/');
        }

        $this->load->model('alunos_model');
        //Faz a consulta no banco de dados pra verificar se existe
        $query = $this->alunos_model->selecionarId($id);
        //Verifica se a consulta retorna um registro, senão vai para a página home
        if($query == NULL) {
            redirect('/');
        }

        // Busca os cursos para edicão
        $lista = $this->alunos_model->buscaCursos();

        // Array onde vai guardar os dados do aluno e cursos, e passamos como parametro para view;
        $dados['aluno'] = $query;
        $dados['cursos'] =$lista;
        //Carrega a View
        $this->load->view('alunos/editar-aluno', $dados);
    }

    public function VisualizarAluno($id){
        if($id == NULL) {
            redirect('/');
        }

        $this->load->model('alunos_model');
        $query = $this->alunos_model->selecionarId($id);
        if($query == NULL) {
            redirect('/');
        }
        $dados['aluno'] = $query;
        $this->load->view('alunos/visualizar-aluno', $dados);
    }



    public function ExcluirAluno($id){
        $this->load->model("alunos_model");
        $this->alunos_model->deletar($id);
        $this->session->set_flashdata("success","Aluno Excluído com Sucesso!");

        $lista = $this->alunos_model->buscaTodos();
        $dados = array("alunos"=>$lista);
        $this->load->view('alunos/gerenciar-aluno', $dados );

    }

}



?>
