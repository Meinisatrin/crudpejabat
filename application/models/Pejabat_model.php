<?php
class Pejabat_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    // public function get_jabatan_list() {
    //     $query = $this->db->get('master_pejabat');
    //     return $query->result();
    // }

    public function get_all()
    {
        // return $this->db->get('pejabat')->result();
        $this->db->select('pejabat.*, master_pejabat.nama as master_pejabat_name');
        $this->db->from('pejabat');
        $this->db->join('master_pejabat', 'pejabat.m_pejabat_id = master_pejabat.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pejabat', array('id' => $id))->row();
    }

    public function get_all_with_master_pejabat()
    {
        $this->db->select('pejabat.*, master_pejabat.nama as nama_master');
        $this->db->from('pejabat');
        $this->db->join('master_pejabat', 'pejabat.m_pejabat_id = master_pejabat.id', 'left');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('pejabat', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pejabat', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pejabat');
    }
}
