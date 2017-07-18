<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert($tb, $items) {
        $this->db->insert($tb, $items);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update($tb, $condition, $items) {
        $this->db->set($items);
        $this->db->where($condition);
        $this->db->update($tb);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete($tb, $condition) {
        $this->db->where($condition);
        $this->db->delete($tb);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
