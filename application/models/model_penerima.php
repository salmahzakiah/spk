<?php
class model_penerima extends CI_Model
{

    public function siswa($id_periode)
    {
        $where = array('id_periode' => $id_periode);
        return $this->db->query("SELECT * FROM tb_siswa LEFT JOIN tb_periode USING (id_periode) LEFT JOIN tb_penerima USING (id_siswa) WHERE id_periode = $id_periode");
    }

    public function siswa_diterima($id_periode)
    {
        $where = array('id_periode' => $id_periode);
        return $this->db->query("SELECT * FROM tb_siswa LEFT JOIN tb_periode USING (id_periode) LEFT JOIN tb_penerima USING (id_siswa) WHERE id_periode = $id_periode");
    }

    public function siswa_wstatus()
    {
        $this->db->join('tb_penerima', 'tb_penerima.id_siswa = tb_siswa.id_siswa');
        return $this->db->get('tb_siswa');
    }

    public function siswa_status_periode($id_periode)
    {
        $where = array('tb_periode.id_periode' => $id_periode);
        $this->db->join('tb_periode', 'tb_periode.id_periode = tb_siswa.id_periode');
        $this->db->join('tb_penerima', 'tb_penerima.id_siswa = tb_siswa.id_siswa');
        return $this->db->get_where('tb_siswa', $where);
    }

    public function siswa_cstatus($id)
    {
        $this->db->join('tb_penerima', 'tb_penerima.id_siswa = tb_siswa.id_siswa');
        $this->db->where('tb_siswa.id_siswa', $id);
        return $this->db->get('tb_siswa');
    }

	public function hapus_penerima($where)
    {
        $this->db->delete($this->table, $where);
    }

    public function insert_status($data)
    {
        $this->db->insert('tb_penerima', $data);
    }

    public function update_status($id, $data)
    {
        $this->db->where('id_siswa', $id);
        $this->db->update('tb_penerima', $data);
    }

    public function getPenerima($dari, $sampai)
    {
        return $this->db->query("SELECT * FROM tb_penerima 
        INNER JOIN tb_siswa USING (id_siswa) 
        INNER JOIN tb_periode USING (id_periode) 
        WHERE tanggal_awal >= '$dari' AND tanggal_akhir <= '$sampai'");
    }

    public function getPenerima_diterima($dari, $sampai)
    {
        return $this->db->query("SELECT * FROM tb_penerima 
        INNER JOIN tb_siswa USING (id_siswa) 
        INNER JOIN tb_periode USING (id_periode) 
        WHERE tanggal_awal >= '$dari' AND tanggal_akhir <= '$sampai' AND status = 'Diterima'");
    }

    public function cek_status($id)
    {
        $this->db->where('id_siswa =', $id);
        return $this->db->get('tb_penerima');
    }

    public function update_dana($id, $data)
    {
        $this->db->where('id_penerima', $id);
        $this->db->update('tb_penerima', $data);
    }

    public function total_anggaran_kumpul($id_periode)
    {
        $query = $this->db->query("SELECT SUM(dana) as total_dana FROM tb_penerima INNER JOIN tb_siswa USING (id_siswa) INNER JOIN tb_periode USING (id_periode) WHERE id_periode = $id_periode AND tb_penerima.status = 'Diterima'");

        return $query->row_array();
    }
}
