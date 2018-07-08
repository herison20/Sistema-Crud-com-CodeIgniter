<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Login extends CI_Controller{

    function index(){
        $this->load->view('login');
    }
   
    public function logar(){
        // Pego minhas inputs via post e guardo nas minha variáveis
        $usuario = $this->input->post('email');
        $senha = $this->input->post('senha');

        // Carrego minha model login
        $this->load->model('Login_model');
        //Chamo meu método da model, e guardo na variavel query
        $query = $this->Login_model->entrar($usuario, $senha);

        // Se a query tiver uma linha, salva o usario na minha sessao, e redireciona pra home
        if ($query->num_rows() == 1) {
            $this->session->set_userdata('logado', $usuario);
            redirect('home');
        // Senão, guarda uma msg de erro pra exibir, e redireciona pro login
        }else{
            $this->session->set_flashdata("error","Email ou Senha Incorreta!");
            redirect('login');
        }
    }

    public function logout(){
        $this->session->unset_userdata("logado");
		redirect(base_url());
    }


}
?>
