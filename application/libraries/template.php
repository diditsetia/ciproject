<?php

	class Template {
		protected $_ci ;

		function __construct()
		{
			$this->_ci = &get_instance();
		}

				
		public function halamanadmin($konten, $data = NULL)
		{
			$data['navbar']		= $this->_ci->load->view('admin/v_navbar', $data, TRUE);
			$data['konten'] 	= $this->_ci->load->view( $konten, $data, TRUE);
			$data['sidebar']	= $this->_ci->load->view('admin/v_sidebarmenu',$data, TRUE);
			$data['footer']		= $this->_ci->load->view('admin/v_footer',$data,TRUE);
		
			

			$this->_ci->load->view('admin/mainadmin', $data);
		}

		public function halamanuser($konten, $data = NULL)
		{
			$data['navbar']				= $this->_ci->load->view('user/v_navbar', $data, TRUE);
			$data['slider']	 			= $this->_ci->load->view('user/v_slider',$data, TRUE);
			$data['navbarkonten']		= $this->_ci->load->view('user/v_navbarkonten', $data, TRUE);
			$data['konten'] 			= $this->_ci->load->view( $konten, $data, TRUE);
			$data['footer']				= $this->_ci->load->view('user/v_footer',$data,TRUE);
		
			

			$this->_ci->load->view('user/mainuser', $data);
		}

		public function halamanuserkonten($konten, $data = NULL)
		{
			$data['navbar']				= $this->_ci->load->view('user/v_navbar', $data, TRUE);
			$data['konten'] 			= $this->_ci->load->view( $konten, $data, TRUE);
			$data['footer']				= $this->_ci->load->view('user/v_footer',$data,TRUE);
		
			

			$this->_ci->load->view('user/mainuserkonten', $data);
		}




	}
?>