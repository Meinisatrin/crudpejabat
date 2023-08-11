<?php
class Master_pejabat_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('master_pejabat')->result();
    }

    public function get_id_by_name($nama)
    {
        $this->db->select('id');
        $this->db->where('nama', $nama);
        $result = $this->db->get('master_pejabat')->row();
        return $result ? $result->id : null;
    }

    public function get_pejabat_options() {
        $this->db->select('id, nama'); // Kolom yang ingin Anda tampilkan sebagai pilihan
        $query = $this->db->get('master_pejabat');
        return $query->result();
    }
    
    public function get_by_id($id)
    {
        return $this->db->get_where('master_pejabat', array('id' => $id))->row();
    }

    public function insert($data)
    {
        $this->db->insert('master_pejabat', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('master_pejabat', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_pejabat');
    }

	public function cari_master($keyword)
	{
		$this->db->like('nama', $keyword); // Menyaring data berdasarkan kolom 'nama' yang mengandung keyword
		return $this->db->get('master_pejabat')->result();
	}

}
