<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Mahasiswa_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Mahasiswa_model extends CI_Model
{

  public $table = 'mahasiswa';
  public $id = 'mahasiswa.id';

  public function __construct()
  {
    parent::__construct();
  }
  public function get()
  {
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function getById($id)
  {
    $this->db->select('m.*,p.nama as prodi');
    $this->db->from('mahasiswa m');
    $this->db->join('prodi p', 'm.prodi = p.id');
    $this->db->where('m.id', $id);
    $query = $this->db->get();
    return $query->row_array();
  }
  public function update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }
  public function insert($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }
  public function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  public function index()
  {
    // 
  }

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */