<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

	class GetJson extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$a = file_get_contents('http://static.sekawanmedia.co.id/data.json');
			$b = json_decode($a, true);
			$displayArray = $b['data'];

			// Pagination Config
			$quantity = 10; // Showing 10 Data per page
			$start = $this->uri->segment(3);
			$data['displayArray'] = array_slice($displayArray, $start, $quantity);
			$config['base_url'] = site_url('GetJson/index');
			$config['total_rows'] = count($displayArray);
			$config['per_page'] = $quantity;
			

			// Styling the Pagination using Bootstrap 4
			$config['first_link']       = 'First';
        	$config['last_link']        = 'Last';
        	$config['next_link']        = 'Next';
        	$config['prev_link']        = 'Prev';
        	$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        	$config['full_tag_close']   = '</ul></nav></div>';
        	$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        	$config['num_tag_close']    = '</span></li>';
        	$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        	$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        	$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        	$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        	$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        	$config['prev_tagl_close']  = '</span>Next</li>';
        	$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        	$config['first_tagl_close'] = '</span></li>';
        	$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			// Initialize Pagination
			$this->pagination->initialize($config);

			$this->load->view('getjson', $data);
		}
	}

?>
