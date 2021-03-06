<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	protected function view($view, $data = array()){
		$load = array();
		$load['content'] = $view;
		
		foreach($data as $key => $val){
			$load[$key] = $val;
		}

		$this->load->view('base', $load);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */