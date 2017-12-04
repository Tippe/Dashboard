<?php
class Auth_model extends CI_Model{

    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hash = $this->get_hash($username);
        if ($this->verifyPassword($password, $hash)){
            $id = $this->getUserId($username);
            $this->session->set_userdata('user_logged', TRUE);
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('id', $id);
            redirect('home');
        } else{
            $this->session->set_flashdata("ERROR", "Invalid username or password!");
            redirect("auth/login", "refresh");
        }
    }

    public function get_hash($username){
            if($username != NULL){
            $this->db->select('password');
            $this->db->from('users');
            $this->db->where('username', $username);
            $query = $this->db->get();

            if($query->num_rows() > 0) {
                $user = $query->row();
                $hash = $query->result_object[0]->password;
                return $hash;
            }
        } else{
            die("Something went wrong.");
        }
    }

    public function getRoleId($username){
        $this->db->select('role_id');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        $result = $query->row();
        return $result->role_id;
    }

    public function getUserId($username){
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        $result = $query->row();
        return $result->id;
    }

    public function register(){
        $passwordhash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $passwordhash
        );
        $this->db->insert('users', $data);
    }

    public function get_user_by_id($id = 0){
        if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }


    function verifyPassword($login_password, $user_password) {
        if (password_verify($login_password, $user_password) ) {
            return true;
        } else{
            $this->session->set_flashdata('failed', '<div class="alert alert-danger text-center">Username or Password incorrect.</div>');
            redirect('auth/login', 'refresh');
        }
    }
}