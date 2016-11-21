<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Songs_model extends CI_Model {

	public $_table 	=	"songs";
	public function __construct()
	{
		parent::__construct();
	}

	public function getNewSongs($key = null, $start = 0, $limit = 10, $random = null, $top = null)
	{
		if($key != null) {
			$this->db->like('name', $key);
		}

		if($random != null) {
			$this->db->order_by('id', 'RANDOM');
		}
		else
		{
			$this->db->order_by('id', 'DESC');
		}

		if($top != null)
		{
			$this->db->order_by('listen', 'DESC');
		}


		$this->db->limit($limit,$start);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function countNewSongs($key = null, $top = null)
	{
		if($key != null) {
			$this->db->like('name', $key);
		}

		if($top != null)
		{
			$this->db->order_by('listen', 'DESC');
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

    public function getSimilar($name, $limit = 10) {
        
        $this->db->like('name', $name);
        $this->db->limit($limit);
		$query = $this->db->get($this->_table);
		return $query->result();
    }

    public function update($p_arr)
	{
		if(!isset($p_arr) || !is_array($p_arr))
		{
			return false;
		}

		if(!array_key_exists('id', $p_arr))
		{
			return false;
		}

		try
		{
			$this->db->update($this->_table, $p_arr, array('id' => $p_arr['id']));
			return true;
		}
		catch(Exception $e)
		{
			return false;
		}
	}
}