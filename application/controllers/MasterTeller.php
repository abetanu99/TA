<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterTeller extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_master");
		
	}

	public function index()
	{		
	}

	public function listRek()
	{		
		$data['menu']    = "menu.php";
		$data['content'] = "data_master/listRek.php";
		$this->load->view('index', $data);
	}

	public function kategoriKycp()
	{		
		$data['menu']    = "menu.php";
		$data['kyc']	 = $this->model_master->allKetKycp();
		$data['content'] = "data_master/kategori_kyc.php";
		$this->load->view('index', $data);
	}

	public function saveKategoriKyc()
	{		
		$this->model_master->deleteKatKyc();
		$dataBesar = array(	"KET" => 'BESAR',
							"NILAI_AWAL" => $_POST['besar1'],
							"NILAI_AKHIR" => $_POST['besar2']);	
		$this->db->insert('KATEGORI_KYC', $dataBesar);

		$dataSedang = array( "KET" => 'SEDANG',
							 "NILAI_AWAL" => $_POST['sedang1'],
							 "NILAI_AKHIR" => $_POST['sedang2']);	
		$this->db->insert('KATEGORI_KYC', $dataSedang);

		$dataKecil = array(	"KET" => 'KECIL',
							"NILAI_AWAL" => $_POST['kecil1'],
							"NILAI_AKHIR" => $_POST['kecil2']);	
		$this->db->insert('KATEGORI_KYC', $dataKecil);
		$this->session->set_flashdata ('success', 'Data Kategori KYCP berhasil di input');
		redirect("MasterTeller/kategoriKycp");
	}

	public function detailRek($norek)
	{		
		$data['rek']	 = ($this->model_master->getRek($norek));
		$data['menu']    = "menu.php";
		$data['content'] = "data_master/master_rek.php";
		$this->load->view('index', $data);
	}

	public function getRek($noac = '%')
	{		
		$rek = ($this->model_master->getRek($noac));
		print_r(json_encode($rek));
	}
	
}
