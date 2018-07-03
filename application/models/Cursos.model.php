<?php
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');
class cursos_model extends CI_Model
{
    public function inserir($curso)
    {
        $this->db->insert("cursos", $curso);
    }

    public function buscaProfessores()
    {
        return $this->db->get("professores")->result_array();
    }

    public function buscaTodos()
    {
        $this->db->select('id_curso, c.nome nome_curso, c.data_criacao criacao_curso, p.id_professor, p.nome nome_professor');
        $this->db->from('cursos c');
        $this->db->join('professores p', 'c.id_professor = p.id_professor');
        $this->db->order_by("id_curso", "asc");
        return $query = $this->db->get()->result_array();
    }

    public function deletar($id)
    {
        if (is_null($id))
            return false;
        $this->db->where('id_curso', $id);
        return $this->db->delete('cursos');
    }

    public function selecionarId($id = NULL)
    {
        if ($id != NULL):
            //Verifica se a ID no banco de dados
            $this->db->select('id_curso, c.nome nome_curso, c.data_criacao criacao_curso, p.id_professor, p.nome nome_professor');
            $this->db->from('cursos c');
            $this->db->join('professores p', 'c.id_professor = p.id_professor');
            $this->db->where('id_curso', $id);
            //limita para apenas um regstro

            //pega os produto
            $query = $this->db->get();
            //retornamos o produto
            return $query->row();
        endif;
    }
    public function atualizarCurso($dados=NULL, $id=NULL){
        if($dados != NULL && $id != NULL){
            $this->db->update('cursos', $dados, array('id_curso'=>$id));
        }
    }
}
