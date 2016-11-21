<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Album_model');
		$data['count']			=	0;
		$data['keyword']		=	"";
		$data['description']	=	"";
		$this->load->library('pagination');

		$config['base_url'] = base_url('albums.html');
		$limit 				= 30;
		$start 				= 0;
	    $config['total_rows'] = $this->Album_model->countAlbums(); // Count total rows in the query
	    $config['per_page'] = $limit;
	    $config['num_links'] = 3;
	    $config['uri_segment'] = 3;

		$config['page_query_string'] = TRUE;

		$config['query_string_segment'] = 'page';

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_link'] = '<i class="fa fa-chevron-right"></i>';
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['next_prev'] = '<i class="fa fa-chevron-left"></i>';
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

	    $config['first_link'] = FALSE;
	    $config['last_link'] = FALSE;

	    


	    $this->pagination->initialize($config); 
	    $data['links'] =  $this->pagination->create_links();


	    if($this->input->get('page') != null)
	    {
	    	$start = $this->input->get('page');
	    }

	    $data['page'] = $this->input->get('page');

		$data['result_album']		= 	$this->Album_model->getAlbums(null, $start, $limit);

		$index 	=	0;
		foreach ($data['result_album'] as $row) {
			$data['keyword']		.=	$row->name.', ';
			$data['description']	.=	$row->name.', ';
			$index++;
			if($index == 4) break;
		}

		$data['title']			= 'Albums | Nhaccuatui.in';

		$this->load->view('head_view', $data);
		$this->load->view('header_view');
		$this->load->view('sidebar_view');
		$this->load->view('album_view');
		$this->load->view('footer_view');
	}
	

	public function playlist($alias,$id)
	{
		$this->load->model('Album_model');
		$this->load->model('Song_album_model');
		$this->load->model('Songs_model');
		$data['keyword']		=	"";
		$data['description']	=	"";
		$data['result']	= 	$this->Album_model->getId($id);
		$song_album 	=	$this->Song_album_model->getIdAlbum($id);
		$index 			= 	0;
		$data['albums'] =  	array();
		foreach ($song_album as $row) {
			$song 		=	$this->Songs_model->getId($row->id_album);
			if(count($song) > 0)
			{
				$data['albums'][] 			=	$song;
				if($index < 5) {
					$data['keyword']		.=	$song[0]->title;
					$data['description']	.=	$song[0]->description;
					$index++;
				}
			}
		}
		$data['index']				=	0;
		// $data['result_similar']	= 	$this->Songs_model->getNewSongs(null, 0, 5, 'random');
		// $data['keyword']		.=	$data['result'][0]->title;
		// $data['description']	.=	$data['result'][0]->description;
		// $data['url']			=	base_url('song/'.$data['result'][0]->alias.'-'.$data['result'][0]->id.'.html');
		$data['title']			= 	$data['result'][0]->link.' | Nhaccuatui.in';
		// $p_arr 			=	array(
		// 					'id'		=>	$id,
		// 					'listen'	=>	($data['result'][0]->listen + 1)
		// 				);
		// $this->Songs_model->update($p_arr);
		$this->load->view('head_view', $data);
		$this->load->view('header_view');
		$this->load->view('sidebar_view');
		$this->load->view('playlist_view');
		$this->load->view('footer_view');
	}
}
