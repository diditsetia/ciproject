<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('template');
			$this->load->model('webmodel');
			$this->load->helper(array('form', 'url'));
			
		}

	public function index()
	{
		$data['datamenu'] = $this->webmodel->tampildatamenu();
		$this->template->halamanuser('user/v_home',$data);
	}

	public function about()
	{
		$data['dataabout'] = $this->webmodel->tampildataabout();
		$this->template->halamanuserkonten('user/v_about',$data);
	}

	public function lokasi()
	{	$data['datajambuka'] = $this->webmodel->tampildatajambuka();
		$data['datalokasi'] = $this->webmodel->tampildatalokasi();
		$this->template->halamanuserkonten('user/v_lokasi',$data);
	}

	public function aksikritiksaran()
	{
		$datakritiksaran = array(
		'nama'			=> $this->input->post('nama'),
		'email'			=> $this->input->post('email'),
		'pesan'			=> $this->input->post('pesan'),
		'create_at'		=> date('Y-m-d H:i:s'),	

		);


		$this->webmodel->tambahpesan($datakritiksaran);
		redirect(site_url('web/lokasi'));
	}

	
}
