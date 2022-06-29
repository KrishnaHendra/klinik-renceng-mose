<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __CONSTRUCT() {
    parent::__CONSTRUCT();
    $data=$this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
    if(!isset($data)){
    redirect('auth');
    }
  }

	public function index()
	{
    $data['konten'] = 'admin/home';
		$this->load->view('admin/template',$data);
	}

}
