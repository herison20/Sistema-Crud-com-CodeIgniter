<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Flexpeak extends CI_Controller{

    function index(){
        $this->load->view('home');
    }

    // Método para chamar a view fpdf para gerar relatório PDF
    public function fpdf(){
        // Carregamos a library
        $this->load->library('myfpdf');
        $this->load->model("Fpdf_model");
        $lista= $this->Fpdf_model->consultaBanco();
        $dados = array("alunos"=>$lista);

        // Carregamos a view
        $this->load->view('fpdf', $dados);

    }

}
?>
