<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_by_login($username, $password) {
        $this->db->where('user_name', $username);
        $query = $this->db->get('users');
        $result = $query->row_array();

        if ($this->bcrypt->check_password($password, $result['user_password'])) {
            return $result;
        } else {
            return FALSE;
        }
    }

    function get_username($userid) {
        $this->db->where('u_id', $userid);
        $query = $this->db->get('users')->row();
        return $query->u_username;
    }

}
