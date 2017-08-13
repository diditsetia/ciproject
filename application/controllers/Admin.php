<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('template');
			$this->load->model('webmodel');
			$this->load->library('session');
			$this->load->helper(array('form', 'url'));
			
		}

	public function index()
	{	
		$masuk = $this->session->userdata('isLogedIn');
			if ( $masuk ) {
				$data['datapesan'] = $this->webmodel->tampildatapesan();
				$this->template->halamanadmin('admin/v_dashboard',$data);
			}else {
				$this->session->set_flashdata('sukses','Harus Login Terlebih dahulu!');
		 		redirect(site_url('admin/login'));
			}
	
	}

	public function login()
	{
		$this->load->view('admin/v_login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url("admin/login"));

	}

	public function aksilogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->webmodel->ceklogin("admin",$where)->num_rows();
		if($cek > 0){

			$query = $this->db->get('admin');
			$datauser = $query->row_array();

			$namauser = $datauser['nama_admin'];
			$foto 	  = $datauser['foto'];
			$email    = $datauser['email'];

			$data_session = array(
				'nama'	=> $namauser,
				'foto' 	=> $foto,
				'email'	=> $email, 
				'isLogedIn' => true
				);

			$this->session->set_userdata($data_session);

			redirect(site_url("admin"));

		}else{
			$this->session->set_flashdata('sukses','Oops...Username/password salah');
		 	redirect(site_url('admin/login'));
		}
	}

	public function hapuspesan($id)
	{
		$this->webmodel->hapuspesan($id);
	    redirect(site_url('admin'));
	}

	public function menu()
	{
		$data['datamenu'] = $this->webmodel->tampildatamenu();
		$this->template->halamanadmin('admin/v_menu',$data);
	}

	public function tambahmenu()
	{
		$this->template->halamanadmin('admin/v_tambahmenu');
	}

	public function aksitambahmenu()
	{
			$config['upload_path']          = './assets/admin/img/fotomenu';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	$this->template->halamanadmin('admin/tambahmenu',$error);

			  }else {

			  	$namamenu =	$this->input->post('menu');

			  	$this->db->like('nama_menu',$namamenu);
			  	$query = $this->db->get('tabel_menu');
				$jumlahdatamenu = $query->num_rows();

			  	

			   $datamenu = array(
			   'nama_menu' 		=> $this->input->post('menu'),
			   'harga'			=> $this->input->post('harga'),
			   'kategori'		=> $this->input->post('kategori'),
			   'status'			=> $this->input->post('status'),
			   'keterangan'		=> $this->input->post('keterangan'),
			   'create_at'		=> date('Y-m-d H:i:s'),
			   'gambar'			=> $this->upload->data()['file_name'],
			  	);

			   if ($jumlahdatamenu != 0) {

			  	$datamenu['slug'] =  $this->input->post('menu').$jumlahdatamenu;

			  	} else{
			  	 $datamenu['slug'] = $this->input->post('menu');
			  	}

			  	$this->webmodel->tambahmenu($datamenu);
				redirect(site_url('admin/tambahmenu'));

			 }
	}

	public function editmenu($id)
	{
		$idnya = array('id_menu' => $id);
	    $dataeditmenu['dataeditmenu'] = $this->webmodel->editmenu($idnya,'tabel_menu')->row();
	    $this->template->halamanadmin('admin/v_editmenu',$dataeditmenu);
	}

	public function aksiupdatemenu()
	{
				$config['upload_path']          = './assets/admin/img/fotomenu';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000;
				$config['max_width']            = 10240;
				$config['max_height']           = 7680;

				$this->upload->initialize($config);
				$this->load->library('upload',$config);
				
			if ( ! $this->upload->do_upload('userfile')) { 
			  	
			   $id 					=  $this->input->post('id');

			    $namamenu = $this->input->post('menu');
			   	$this->db->like('nama_menu',$namamenu);
			  	$query 	= $this->db->get('tabel_menu');
				$jumlahdatamenu = $query->num_rows();

			   $datamenu = array(
				   'nama_menu' 		=> $this->input->post('menu'),
				   'harga'			=> $this->input->post('harga'),
				   'kategori'		=> $this->input->post('kategori'),
				   'status'			=> $this->input->post('status'),
				   'keterangan'		=> $this->input->post('keterangan'),
				   'update_at'		=> date('Y-m-d H:i:s'),
				   'gambar'			=> $this->input->post('oldfile'),
			  	);


			   if ($jumlahdatamenu != 0) {
			  		$datamenu['slug'] =  $this->input->post('menu').$jumlahdatamenu;
			  	} else{
			  	 	$datamenu['slug'] =  $this->input->post('menu');
			  	}

			   $where = array(
					'id_menu' => $id
				);

			} else {

				$namamenu = $this->input->post('menu');
			   	$this->db->like('nama_menu',$namamenu);
			  	$query 	= $this->db->get('tabel_menu');
				$jumlahdatamenu = $query->num_rows();

			   	$id 					= $this->input->post('id');

			   $datamenu = array(
			   	'nama_menu' 		=> $this->input->post('menu'),
			   	'harga'				=> $this->input->post('harga'),
			   	'kategori'			=> $this->input->post('kategori'),
			   	'status'			=> $this->input->post('status'),
			   	'keterangan'		=> $this->input->post('keterangan'),
			   	'update_at'			=> date('Y-m-d H:i:s'),
			   	'gambar'			=> $this->upload->data()['file_name'],
			  	);

			   	

			   if ($jumlahdatamenu != 0) {
			  		$datamenu['slug'] =  $this->input->post('menu').$jumlahdatamenu;
			  	} else{
			  	 	$datamenu['slug'] =  $this->input->post('menu');
			  	}

			   $where = array(

				'id_menu' => $id

				);

			   
			 }

			 	$this->webmodel->updatemenu($datamenu,$where);
				redirect(site_url('admin/menu'));
	}

	public function hapusmenu($id)
	{
		$this->webmodel->hapusmenu($id);
	    redirect(site_url('admin/menu'));
	}

	public function about()
	{
		$data['dataabout'] = $this->webmodel->tampildataabout();
		$this->template->halamanadmin('admin/v_about',$data);
	}

	public function tambahabout()
	{
		$this->template->halamanadmin('admin/v_tambahabout');
	}

	public function aksitambahabout()
	{
			$config['upload_path']          = './assets/admin/img/fotomenu';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	$this->template->halamanadmin('admin/aksitambahabout',$error);

			  }else {  	

			   $dataabout = array(
			   'isi_about' 		=> $this->input->post('isiabout'),
			   'create_at'		=> date('Y-m-d H:i:s'),
			   'foto'			=> $this->upload->data()['file_name'],
			  	);

			  	$this->webmodel->tambahabout($dataabout);
				redirect(site_url('admin/tambahabout'));

				}
	}

	public function editabout($id)
	{
		$idnya = array('id_about' => $id);
	    $dataeditabout['dataeditabout'] = $this->webmodel->editabout($idnya,'tabel_about')->row();
	    $this->template->halamanadmin('admin/v_editabout',$dataeditabout);
	}

	public function aksiupdateabout()
	{
				$config['upload_path']          = './assets/admin/img/fotomenu';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000;
				$config['max_width']            = 10240;
				$config['max_height']           = 7680;

				$this->upload->initialize($config);
				$this->load->library('upload',$config);
				
			if ( ! $this->upload->do_upload('userfile')) { 
			  	
			   $id = $this->input->post('id');


			   $dataabout = array(
		
				   'isi_about'		=> $this->input->post('isiabout'),
				   'update_at'		=> date('Y-m-d H:i:s'),
				   'foto'			=> $this->input->post('oldfile'),
			  	);

			   $where = array(
					'id_about' => $id
				);

			} else {

			   	$id = $this->input->post('id');


			   $dataabout = array(
			   
			   	'isi_about'		=> $this->input->post('isiabout'),
			   	'update_at'		=> date('Y-m-d H:i:s'),
			   	'foto'			=> $this->upload->data()['file_name'],
			  	);

			   $where = array(

				'id_about' => $id

				);
			 }

			 	$this->webmodel->updateabout($dataabout,$where);
				redirect(site_url('admin/about'));
	}

	public function hapusabout($id)
	{
		$this->webmodel->hapusabout($id);
	    redirect(site_url('admin/about'));
	}

	public function lokasi()
	{
		$data['datalokasi'] = $this->webmodel->tampildatalokasi();
		$this->template->halamanadmin('admin/v_lokasi',$data);
	}

	public function tambahlokasi()
	{
		$this->template->halamanadmin('admin/v_tambahlokasi');
	}

	public function aksitambahlokasi()
	{
			$config['upload_path']          = './assets/admin/img/fotomenu';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	$this->template->halamanadmin('admin/aksitambahlokasi',$error);

			  }else {  	

			   $datalokasi = array(
			   'alamat' 		=> $this->input->post('alamat'),
			   'no_telep'		=> $this->input->post('telepone'),
			   'oprasional'		=> $this->input->post('oprasional'),
			   'status'			=> $this->input->post('status'),
			   'create_at'		=> date('Y-m-d H:i:s'),
			   'foto'			=> $this->upload->data()['file_name'],
			  	);

			  	$this->webmodel->tambahlokasi($datalokasi);
				redirect(site_url('admin/tambahlokasi'));

				}
	}

	public function editlokasi($id)
	{
		$idnya = array('id_lokasi' => $id);
	    $dataeditlokasi['dataeditlokasi'] = $this->webmodel->editlokasi($idnya,'tabel_lokasi')->row();
	    $this->template->halamanadmin('admin/v_editlokasi',$dataeditlokasi);
	}
	public function aksiupdatelokasi()
	{
				$config['upload_path']          = './assets/admin/img/fotomenu';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000;
				$config['max_width']            = 10240;
				$config['max_height']           = 7680;

				$this->upload->initialize($config);
				$this->load->library('upload',$config);
				
			if ( ! $this->upload->do_upload('userfile')) { 
			  	
			   $id = $this->input->post('id');


			   $datalokasi = array(
		
				   'alamat'		=> $this->input->post('alamat'),
				   'no_telep'	=> $this->input->post('telepone'),
				   'oprasional' => $this->input->post('oprasional'),
				   'status'		=> $this->input->post('status'),
				   'update_at'	=> date('Y-m-d H:i:s'),
				   'foto'		=> $this->input->post('oldfile'),
			  	);


			   $where = array(
					'id_lokasi' => $id
				);

			} else {

			   	$id = $this->input->post('id');


			   $datalokasi = array(
			   
			   	'alamat'		=> $this->input->post('alamat'),
				'no_telep'		=> $this->input->post('telepone'),
				'oprasional' 	=> $this->input->post('oprasional'),
				'status'		=> $this->input->post('status'),
				'update_at'		=> date('Y-m-d H:i:s'),
			   	'foto'			=> $this->upload->data()['file_name'],
			  	);

			   $where = array(

				'id_lokasi' => $id

				);
			 }

			 	$this->webmodel->updatelokasi($datalokasi,$where);
				redirect(site_url('admin/lokasi'));
	}

	public function hapuslokasi($id)
	{
		$this->webmodel->hapuslokasi($id);
	    redirect(site_url('admin/lokasi'));
	}

	public function pengaturanweb()
	{
		$data['datapengaturan'] = $this->webmodel->tampildatapengaturan();
		$this->template->halamanadmin('admin/v_pengaturanweb',$data);
	}

	public function aksipengaturanweb()
	{
			$config['upload_path']          = './assets/admin/img/fotomenu';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	$this->template->halamanadmin('admin/v_pengaturanweb',$error);

			  }else {  	

			   $dataweb = array(
			   'nama_web' 		=> $this->input->post('namaweb'),
			   'footer'			=> $this->input->post('footer'),
			   'logo_web'		=> $this->upload->data()['file_name'],

			  	);


			  	$this->webmodel->tambahweb($dataweb);
				$insert_id = $this->db->insert_id();
				
				if ($insert_id != NULL) {
					
					$config['upload_path']          = './assets/admin/img/fotomenu';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 10000;
					$config['max_width']            = 10240;
					$config['max_height']           = 7680;

					$this->upload->initialize($config);
					$this->load->library('upload',$config);
					
					if ( ! $this->upload->do_upload('slidebar1')) {
					 	$error = array('error' => $this->upload->display_errors());
					 	$this->template->halamanadmin('admin/aksitambahlokasi',$error);

					}else {
 
						$dataslidebar = array(
					   'id_pengaturanweb' 	=> $insert_id ,
					   'nama_file'			=> $this->upload->data()['file_name'],
					   'lokasi_file'		=> $this->upload->data()['file_path'],
					  	);
					  	$this->webmodel->tambahslidebar($dataslidebar);
					  	}

					if (! $this->upload->do_upload('slidebar2') ) {
						$error = array('error' => $this->upload->display_errors());
					 	$this->template->halamanadmin('admin/aksitambahlokasi',$error);

					}else {

					  $dataslidebar = array(
					   'id_pengaturanweb' 	=> $insert_id ,
					   'nama_file'			=> $this->upload->data()['file_name'],
					   'lokasi_file'		=> $this->upload->data()['file_path'],
					  	);
					  	$this->webmodel->tambahslidebar($dataslidebar);
					}

					if (! $this->upload->do_upload('slidebar1')) {
					  	$error = array('error' => $this->upload->display_errors());
					 	$this->template->halamanadmin('admin/aksitambahlokasi',$error);
					}
					else {  

					   $dataslidebar = array(
					   'id_pengaturanweb' 	=> $insert_id ,
					   'nama_file'			=> $this->upload->data()['file_name'],
					   'lokasi_file'		=> $this->upload->data()['file_path'],
					  	);
					  	$this->webmodel->tambahslidebar($dataslidebar);
						}

					redirect(site_url('admin/pengaturanweb'));

				}
			}


		}

		public function aksiupdatepengaturanweb()
		{
				$config['upload_path']          = './assets/admin/img/fotomenu';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000;
				$config['max_width']            = 10240;
				$config['max_height']           = 7680;

				$this->upload->initialize($config);
				$this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('userfile')) {
			 	
			 	$idpengaturan = $this->input->post('id');


			   $dataweb = array(
		
				   'nama_web'	=> $this->input->post('namaweb'),
				   'footer'		=> $this->input->post('footer'),
				   'logo_web'	=> $this->input->post('oldlogo'),
			  	);

			  

			   $where = array(
					'id_pengaturan' => $idpengaturan
				);

			   $this->webmodel->updateweb($dataweb,$where);

			  }else {  

			  	$idpengaturan1 = $this->input->post('id');	

			   $dataweb = array(
			   'nama_web' 		=> $this->input->post('namaweb'),
			   'footer'			=> $this->input->post('footer'),
			   'logo_web'		=> $this->upload->data()['file_name'],

			  	);

			   $where = array(
					'id_pengaturan' => $idpengaturan1
				);

			  	$this->webmodel->updateweb($dataweb,$where);

				
			}

			$query = $this->db->get('tabel_pengaturanweb');
			$datapengaturanweb = $query->num_rows();

			

			if ($datapengaturanweb != 0 ) {
				
					$config['upload_path']          = './assets/admin/img/fotomenu';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 10000;
					$config['max_width']            = 10240;
					$config['max_height']           = 7680;

					$this->upload->initialize($config);
					$this->load->library('upload',$config);
					
					if ( ! $this->upload->do_upload('slider1')) {
					 	
						  $idslider = $this->input->post('idgambar1');


						   $dataslider = array(
					
							   
							   'nama_file'		=> $this->input->post('oldslider1'),
							   'lokasi_file'	=> $this->input->post('lokasi1'),
						  	);


						   $where = array(
								'id_gambar' => $idslider
							);

						   $this->webmodel->updateslider($dataslider,$where);



					}else {

						$idslider1 = $this->input->post('idgambar1');
 
						$dataslider = array(

					   'nama_file'			=> $this->upload->data()['file_name'],
					   'lokasi_file'		=> $this->upload->data()['file_path'],
					  	);

					  	$where = array(	
						'id_gambar' => $idslider1
						);

					  	$this->webmodel->updateslider($dataslider,$where);
					  	}


					  	$config['upload_path']          = './assets/admin/img/fotomenu';
						$config['allowed_types']        = 'gif|jpg|png';
						$config['max_size']             = 10000;
						$config['max_width']            = 10240;
						$config['max_height']           = 7680;

						$this->upload->initialize($config);
						$this->load->library('upload',$config);
						
						if ( ! $this->upload->do_upload('slider2')) {
						 	
							  $idslider2 = $this->input->post('idgambar2');


							   $dataslider = array(
						
								   
								   'nama_file'		=> $this->input->post('oldslider2'),
								   'lokasi_file'	=> $this->input->post('lokasi2'),
							  	);


							   $where = array(
									'id_gambar' => $idslider2
								);

							   $this->webmodel->updateslider($dataslider,$where);



						}else {

							$idslider3 = $this->input->post('idgambar2');
	 
							$dataslider = array(

						   'nama_file'			=> $this->upload->data()['file_name'],
						   'lokasi_file'		=> $this->upload->data()['file_path'],
						  	);

						  	$where = array(	
							'id_gambar' => $idslider3
							);

						  	$this->webmodel->updateslider($dataslider,$where);
						  	}

							$config['upload_path']          = './assets/admin/img/fotomenu';
							$config['allowed_types']        = 'gif|jpg|png';
							$config['max_size']             = 10000;
							$config['max_width']            = 10240;
							$config['max_height']           = 7680;

							$this->upload->initialize($config);
							$this->load->library('upload',$config);
							
							if ( ! $this->upload->do_upload('slider3')) {
							 	
								  $idslider3 = $this->input->post('idgambar3');


								   $dataslider = array(
							
									   
									   'nama_file'		=> $this->input->post('oldslider3'),
									   'lokasi_file'	=> $this->input->post('lokasi2'),
								  	);


								   $where = array(
										'id_gambar' => $idslider3
									);

								   $this->webmodel->updateslider($dataslider,$where);



							}else {

								$idslider4 = $this->input->post('idgambar3');
		 
								$dataslider = array(

							   'nama_file'			=> $this->upload->data()['file_name'],
							   'lokasi_file'		=> $this->upload->data()['file_path'],
							  	);

							  	$where = array(	
								'id_gambar' => $idslider4
								);

							  	$this->webmodel->updateslider($dataslider,$where);
							  	}




			}

			redirect(site_url('admin/pengaturanweb'));
		}
	
}
