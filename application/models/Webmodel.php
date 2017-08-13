<?php 

	/**
	* 
	*/
	
	class Webmodel extends CI_Model
	{

		public function ceklogin($table,$where)
		{
			return $this->db->get_where($table,$where);
		}

		

		public function tambahmenu($datamenu)
		{
			$this->db->insert('tabel_menu',$datamenu);
		}

		public function hapuspesan($id)
		{
			$this->db->where('id_saran',$id);
			$this->db->delete('tabel_sarankritik');
		}

		public function tambahpesan($datakritiksaran)
		{
			$this->db->insert('tabel_sarankritik',$datakritiksaran);
		}
		
		public function tampildatamenu()
		{
			$query = $this->db->get('tabel_menu');
			$datamenu = $query->result_array();
			return $datamenu;
		}

		public function tampildatapesan()
		{
			$query = $this->db->get('tabel_sarankritik');
			$datapesan = $query->result_array();
			return $datapesan;
		}

		public function editmenu($idnya,$table)
		{
			return $this->db->get_where($table,$idnya);	
		}

		public function updatemenu($datamenu,$where)
		{
			$this->db->where($where);
			$this->db->update('tabel_menu', $datamenu);

		}

		public function hapusmenu($id)
		{
			$this->db->where('id_menu',$id);
			$this->db->delete('tabel_menu');
		}
		public function tambahabout($dataabout)
		{
			$this->db->insert('tabel_about',$dataabout);
		}

		public function tampildataabout()
		{
			$query = $this->db->get('tabel_about');
			$dataabout = $query->result_array();
			return $dataabout;
		}

		public function editabout($idnya,$table)
		{
			return $this->db->get_where($table,$idnya);
		}

		public function updateabout($dataabout,$where)
		{
			$this->db->where($where);
			$this->db->update('tabel_about', $dataabout);
		}
		public function hapusabout($id)
		{
			$this->db->where('id_about',$id);
			$this->db->delete('tabel_about');
		}

		public function tambahlokasi($datalokasi)
		{
			$this->db->insert('tabel_lokasi',$datalokasi);	
		}

		public function tampildatalokasi()
		{
			$query = $this->db->get('tabel_lokasi');
			$datalokasi = $query->result_array();
			return $datalokasi;
		}

		public function tampildatajambuka()
		{
			$query = $this->db->get('tabel_lokasi');
			$datajambuka = $query->row_array();
			return $datajambuka;
		}

		public function editlokasi($idnya,$table)
		{
			return $this->db->get_where($table,$idnya);
		}
		public function updatelokasi($datalokasi,$where)
		{
			$this->db->where($where);
			$this->db->update('tabel_lokasi', $datalokasi);
	
		}

		public function hapuslokasi($id)
		{
			$this->db->where('id_lokasi',$id);
			$this->db->delete('tabel_lokasi');
		}

		public function tambahweb($dataweb)
		{
			$this->db->insert('tabel_pengaturanweb',$dataweb);

		}
		public function tambahslidebar($dataslidebar)
		{
			$this->db->insert('tabel_gambar_slidebar',$dataslidebar);
		}

		public function tampildatapengaturan ()
		{
			$query = $this->db->select('id_pengaturanweb, nama_web, logo_web, footer, GROUP_CONCAT(id_gambar) as id_gambar,GROUP_CONCAT(lokasi_file) as lokasi_file, GROUP_CONCAT(nama_file) as nama_file')
			->join('tabel_gambar_slidebar','tabel_gambar_slidebar.id_pengaturanweb = tabel_pengaturanweb.id_pengaturan' )
			->get('tabel_pengaturanweb');
			$datapengaturan = $query->row_array();
			return $datapengaturan;
		}

		public function updateweb($dataweb,$where)
		{
			$this->db->where($where);
			$this->db->update('tabel_pengaturanweb', $dataweb);
		}

		public function updateslider($dataslider,$where)
		{
			$this->db->where($where);
			$this->db->update('tabel_gambar_slidebar', $dataslider);
		}
		
	}

