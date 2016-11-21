<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Song_album_model extends CI_Model {

	public $_table 	=	"album_song";
	public function __construct()
	{
		parent::__construct();
	}

    public function getIdAlbum($id) {
        
        $this->db->where('id_song', $id);
		$query = $this->db->get($this->_table);
		return $query->result();
    }

    

}