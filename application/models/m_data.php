<?php
class M_Data extends CI_Model{
    function tampil_data()
    {
        return $this->db->get('user');
    }
}