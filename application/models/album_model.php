<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model {

	public $_table 	=	"album";
	public function __construct()
	{
		parent::__construct();
	}

	public function getAlbums($key = null, $start = 0, $limit = 10, $random = null)
	{
		if($key != null) {
			$this->db->like('name', $key);
		}

		if($random != null) {
			$this->db->order_by('id', 'RANDOM');
		}
		else
		{
			$this->db->order_by('id');
		}

		$this->db->limit($limit,$start);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function countAlbums($key = null)
	{
		if($key != null) {
			$this->db->like('name', $key);
		}
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function getAlias($alias) {
        
        $this->db->where('alias', $alias);
        $this->db->limit(1);
		$query = $this->db->get($this->_table);
		return $query->result();
    }

    public function getId($id) {
        
        $this->db->where('id', $id);
        $this->db->limit(1);
		$query = $this->db->get($this->_table);
		return $query->result();
    }

    

}