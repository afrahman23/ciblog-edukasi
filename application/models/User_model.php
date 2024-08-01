<?php 
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function registerguru($password){
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password,
            // 'level' => $this->input->post('level'),
            'level' => 1,
        ];

        return $this->db->insert('users', $data);
    }


    public function registersiswa($password){
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password,
            // 'level' => $this->input->post('level'),
            'level' => 2,
        ];

        return $this->db->insert('users', $data);
    }




    public function login($username){
        
        return $this->db->get_where('users', [ 'username' => $username])->row();
    }
}