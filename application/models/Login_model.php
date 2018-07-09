<?php
/**
 *
 * Created by PhpStorm.
 * User: Hérison Assunção
 * Email: herison.assuncao@outlook.com
 *
 */
class Login_model extends CI_Model{
 
    public function entrar($usuario, $senha){
        
        $this->db->where('email', $usuario);
        $this->db->where('senha', $senha);

        return $this->db->get('administradores');

       
    }

   
}
