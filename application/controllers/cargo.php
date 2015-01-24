<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once "MY_Controller" .EXT;
class Cargo extends MY_Controller {

	private $pageTitle;
	public function Cargo(){
		parent::__construct();
		$this->template->use_ci_parser = TRUE;
		$this->template->set('pageTitle', $this->pageTitle);
	}

	public function index(){
		//reset cargo
		$this->session->unset_userdata('cargo');
		redirect('cargo/add', 'refresh');
	}

	public function add(){
		$this->pageTitle = "Shipping Form - Phiếu Gửi Hàng";

		$cargo = $this->session->userdata('cargo');
		$this->template->set('cargo', $cargo);

		$this->template->set('pageTitle', $this->pageTitle);
		$this->template->render();
	}

	public function edit(){

		$cargo_id = $this->uri->segment(3, '');
		$cargo = $this->_get_cargo_detail_by_id($cargo_id);

		//echo "<pre>";print_r($cargo);echo "</pre>";

		$this->template->set('cargo', $cargo);
		$this->pageTitle = "Adjust Shipping Form - Phiếu Gửi Hàng";
		$this->template->set('pageTitle', $this->pageTitle);
		$this->template->render();

	}

	public function review(){

		$cargo = $this->input->post();
		$this->session->set_userdata( $cargo );

		$cargo = $this->session->userdata('cargo');
		$this->template->set('cargo', $cargo);
		
		$this->pageTitle = "Review Shipping Form";
		$this->template->set('pageTitle', $this->pageTitle);
		$this->template->render();
	}


	public function update(){

	}

	public function save(){
		$cargo = $this->session->userdata('cargo');
		if( empty($cargo['cargo']['grand_total']) ){
			redirect('cargo', 'refresh');
		}

		//add sender
		$this->load->model('Sender_model');
		$sender_id = $this->Sender_model->new_sender($cargo['sender']);

		//add recipient
		$cargo['recipient']['sender_id'] = $sender_id;
		$this->load->model('Recipient_model');
		$recipient_id = $this->Recipient_model->new_recipient($cargo['recipient']);

		//add cargo
		$this->load->model('Cargo_model');
		$cargo['cargo']['tracking_number'] = tracking_number();
		$cargo['cargo']['sender_id'] = $sender_id;
		$cargo['cargo']['recipient_id'] = $recipient_id;
		$cargo_id = $this->Cargo_model->new_cargo($cargo['cargo']);

		//add package
		$this->load->model('Package_model');
		$packages = convert_html_value_array($cargo['package']);
		foreach($packages as $key => $val){
			$val['cargo_id'] = $cargo_id;	
			$packages_id = $this->Package_model->new_package($val);
		}

		//add other fee
		$this->load->model('Other_fee_model');
		$other_fee = convert_html_value_array($cargo['other_fee']);
		foreach($other_fee as $key => $val){
			$val['cargo_id'] = $cargo_id;	
			$other_fee_id = $this->Other_fee_model->new_other_fee($val);
		}

		$status['detail'] = "Successed";
		$status['error'] = false;
		$this->session->set_flashdata('status', $status);
		$this->session->unset_userdata('cargo');
		redirect('cargo/view/' . $cargo_id, 'refresh');
	}

	public function lists(){
		$this->pageTitle = "List of shipping";
		
		//get all cargo detail
		$this->load->model('Cargo_model');
		$this->load->model('Package_model');
		$this->load->model('Other_fee_model');
		$cargo = $this->Cargo_model->get_all();
		foreach($cargo as $key => $val){
			$cargo[$key]['sender'] = $this->Cargo_model->get_sender_by_id($val['id']);
			$cargo[$key]['recipient'] = $this->Cargo_model->get_recipient_by_id($val['id']);
			$cargo[$key]['package'] = $this->Package_model->get_by_cargo_id($val['id']);
			$cargo[$key]['other_fee'] = $this->Other_fee_model->get_by_cargo_id($val['id']);

		}
		//echo "<pre>";print_r($cargo);echo "</pre>";

		$this->template->set('cargo', $cargo);
		$this->template->set('pageTitle', $this->pageTitle);
		$this->template->render();
	}

	public function view(){
		$this->pageTitle = "";
		$cargo_id = $this->uri->segment(3, '');

		$cargo = $this->_get_cargo_detail_by_id($cargo_id);

		$this->template->set('cargo', $cargo);
		$this->template->set('pageTitle', $this->pageTitle);
		$this->template->render();
	}


	public function _get_cargo_detail_by_id($cargo_id){

		$cargo = array();
		//get cargo detail
		$this->load->model('Cargo_model');
		$cargo['cargo'] = $this->Cargo_model->get_by_id($cargo_id);

		//get sender detail
		$this->load->model('Sender_model');
		$cargo['sender'] = $this->Sender_model->get_by_id($cargo['cargo']['sender_id']);

		//get recipient detail
		$this->load->model('Recipient_model');
		$cargo['recipient'] = $this->Recipient_model->get_by_id($cargo['cargo']['recipient_id']);

		//get package detail
		$this->load->model('Package_model');
		$cargo['package'] = $this->Package_model->get_by_cargo_id($cargo['cargo']['id']);

		//get other fee detail
		$this->load->model('Other_fee_model');
		$cargo['other_fee'] = $this->Other_fee_model->get_by_cargo_id($cargo['cargo']['id']);

		return $cargo;
	}

}

/* End of file cargo.php */
/* Location: ./application/controllers/cargo.php */