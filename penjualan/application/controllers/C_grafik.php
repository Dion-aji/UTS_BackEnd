<?php
class C_grafik extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this-> load -> view ('V_header');
		$this->load->model('m_grafik');
	}
	function index(){
		$data['data']=$this->m_grafik->get_data_popular();
		$this->load->view('v_grafik',$data);
	}
}
