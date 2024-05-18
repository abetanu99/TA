<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanTeller extends CI_Controller {

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
		$this->load->model("model_laporan");
		
	}

	public function index()
	{		
		$data['content'] = "navigasi/dashboard.php";
		$this->load->view('index', $data);
	}

	public function kyclap()
	{		
		$data['menu']    = "menu.php";
		$data['content'] = "laporan/laporan_kyc.php";
		$this->load->view('index', $data);
	}

	public function laporanKyc()
	{		
		$tanggal1=$_GET['tgl1'];
		$tanggal2=$_GET['tgl2'];
		// $tanggal1="2021/02/02";
		// $tanggal2="2023/02/02";
		$rek = ($this->model_laporan->laporanKycHis($tanggal1,$tanggal2));
		print_r(json_encode($rek));
	} 

}
