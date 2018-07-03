<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
class professores_model extends CI_Model{

    public function inserir($professor){
        $this->db->insert("professores",$professor);
    }
    public function buscaTodos(){

        return $this->db->get("professores")->result_array();
    }

    public function selecionarId($id = NULL)
    {
        if ($id != NULL):
            $this->db->where('id_professor', $id);
            $query = $this->db->get("professores");
            return $query->row();
        endif;
    }

    public function atualizarProfessor($dados=NULL, $id=NULL){
        if ($dados != NULL && $id != NULL) {
            $this->db->update('professores', $dados, array('id_professor' => $id));
        }
    }
    function deletar($id) {
        if(is_null($id))
            return false;
        $this->db->where('id_professor', $id);
        return $this->db->delete('professores');
    }
}
