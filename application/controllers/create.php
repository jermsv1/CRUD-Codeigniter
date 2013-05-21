<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

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
	public function index()
	{

		$data['messages'] = "";
			$this->load->view('header');
			$this->load->view('create_view');
			$this->load->view('footer');
	}

	public function input(){

		if(
			$this->input->post('name') != "" &&
			$this->input->post('message') != "" &&
			$this->input->post('contact') != ""
		)
		{
			$data['name'] = $this->input->post('name');
			$data['message'] = $this->input->post('message');
			$data['contact'] = $this->input->post('contact');
			$this->messages_model->insert_entry($data);

		//	redirect("/home/index?action=success");
		}
		else{
			
		}
		redirect("/home/index");
	}	


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */