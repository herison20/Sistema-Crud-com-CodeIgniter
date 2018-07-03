<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
class alunos_model extends CI_Model{
    public function inserir($aluno){
        $this->db->insert("alunos", $aluno);
    }
    public function buscaCursos(){
        return $this->db->get("cursos")->result_array();
    }
    public function buscaTodos(){
        $this->db->select('id_aluno, a.nome nome_aluno, data_nascimento, logradouro, numero, bairro, cidade, estado, c.nome nome_curso');
        $this->db->from('alunos a');
        $this->db->join('cursos c', 'a.id_curso = c.id_curso');
        $this->db->order_by("id_aluno", "asc");
        return $query = $this->db->get()->result_array();
    }

    public function selecionarId($id = NULL)
    {
        if ($id != NULL):
            $this->db->select('id_aluno, a.nome nome_aluno, data_nascimento, logradouro, numero, bairro, cidade, estado, cep, c.id_curso, c.nome nome_curso, a.data_criacao');
            $this->db->from('alunos a');
            $this->db->join('cursos c', 'a.id_curso = c.id_curso');
            $this->db->where('id_aluno', $id);

            $query = $this->db->get();

            return $query->row();
        endif;
    }

    public function atualizarAluno($dados=NULL, $id=NULL)
    {
        if ($dados != NULL && $id != NULL) {
            $this->db->update('alunos', $dados, array('id_aluno' => $id));
        }
    }
    function deletar($id) {
        if(is_null($id))
            return false;
        $this->db->where('id_aluno', $id);
        return $this->db->delete('alunos');
    }
}
