<?php
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');
class Fpdf_model extends CI_Model
{
    public function consultaBanco()
    {
        $this->db->select('id_aluno, a.nome nome_aluno, a.data_nascimento, logradouro, numero, bairro, cidade, estado, cep, c.nome nome_curso, p.nome nome_professor');
        $this->db->from('alunos a');
        $this->db->join('cursos c', 'a.id_curso = c.id_curso');
        $this->db->join('professores p', 'c.id_professor = p.id_professor');
        $this->db->order_by("id_aluno", "asc");
        return $query = $this->db->get()->result_array();
    }

}
