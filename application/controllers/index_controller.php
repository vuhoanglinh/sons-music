<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index_controller extends CI_Controller {

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
		$this->load->model('Songs_model');
		$data['count']			=	0;
		$data['keyword']		=	"";
		$data['description']	=	"";
		$data['result_random']	= 	$this->Songs_model->getNewSongs(null, 0, 12, 'random');
		$data['result_new']		= 	$this->Songs_model->getNewSongs(null, 0, 16);
		$data['result_top']		= 	$this->Songs_model->getNewSongs(null, 0, 10, null, 'top');

		$index 	=	0;
		foreach ($data['result_new'] as $row) {
			$data['keyword']		.=	$row->title;
			$data['description']	.=	$row->description;
			$index++;
			if($index == 4) break;
		}

		$data['title']			= 'Music | Nhaccuatui.in';

		$this->load->view('head_view', $data);
		$this->load->view('header_view');
		$this->load->view('sidebar_view');
		$this->load->view('index_view');
		$this->load->view('footer_view');
	}

	public function top()
	{
		$this->load->model('Songs_model');
		$data['count']			=	0;
		$data['keyword']		=	"";
		$data['description']	=	"";
		$data['result_top']		= 	$this->Songs_model->getNewSongs(null, 0, 10, null, 'top');
		$data['result_new']		= 	$this->Songs_model->getNewSongs(null, 0, 16);

		$index 	=	0;
		foreach ($data['result_top'] as $row) {
			$data['keyword']		.=	$row->title;
			$data['description']	.=	$row->description;
			$index++;
			if($index == 4) break;
		}

		$data['title']			= 'Top songs | Nhaccuatui.in';

		$this->load->view('head_view', $data);
		$this->load->view('header_view');
		$this->load->view('sidebar_view');
		$this->load->view('top_view');
		$this->load->view('footer_view');
	}

	public function news()
	{
		$this->load->model('Songs_model');
		$data['count']			=	0;
		$data['keyword']		=	"";
		$data['description']	=	"";
		$this->load->library('pagination');

		$config['base_url'] = base_url('new.html');
		$limit 				= 30;
		$start 				= 0;
	    $config['total_rows'] = $this->Songs_model->countNewSongs(); // Count total rows in the query
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

		$data['result_new']		= 	$this->Songs_model->getNewSongs(null, $start, $limit);

		$index 	=	0;
		foreach ($data['result_new'] as $row) {
			$data['keyword']		.=	$row->title;
			$data['description']	.=	$row->description;
			$index++;
			if($index == 4) break;
		}

		$data['title']			= 'New songs | Nhaccuatui.in';

		$this->load->view('head_view', $data);
		$this->load->view('header_view');
		$this->load->view('sidebar_view');
		$this->load->view('new_view');
		$this->load->view('footer_view');
	}

	public function detail($alias,$id)
	{
		$this->load->model('Songs_model');
		$data['keyword']		=	"";
		$data['description']	=	"";
		$data['result']	= 	$this->Songs_model->getId($id);
		
		$data['result_similar']	= 	$this->Songs_model->getNewSongs(null, 0, 5, 'random');
		$data['keyword']		.=	$data['result'][0]->title;
		$data['description']	.=	$data['result'][0]->description;
		$data['url']			=	base_url('song/'.$data['result'][0]->alias.'-'.$data['result'][0]->id.'.html');
		$data['title']			= 	$data['result'][0]->name.' | Nhaccuatui.in';
		$p_arr 			=	array(
							'id'		=>	$id,
							'listen'	=>	($data['result'][0]->listen + 1)
						);
		$this->Songs_model->update($p_arr);
		$this->load->view('head_view', $data);
		$this->load->view('header_view');
		$this->load->view('sidebar_view');
		$this->load->view('detail_view');
		$this->load->view('footer_view');
	}
}
